import 'package:flutter/material.dart';
import 'dart:ui';
import 'dart:convert';
import 'package:http/http.dart' as http;

class PantallaNuevaContrasena extends StatefulWidget {
  final String email;
  const PantallaNuevaContrasena({super.key, required this.email});

  @override
  State<PantallaNuevaContrasena> createState() =>
      _PantallaNuevaContrasenaState();
}

class _PantallaNuevaContrasenaState extends State<PantallaNuevaContrasena> {
  final TextEditingController _passController = TextEditingController();
  final TextEditingController _confirmPassController = TextEditingController();

  bool _isObscure = true;
  bool _isObscureConfirm = true;
  bool _isLoading = false;

  Future<void> _actualizarEnServidor(String nuevaPassword) async {
    setState(() => _isLoading = true);

    try {
      final url = Uri.parse(
        'http://172.25.72.225/api_flutter/actualizar_password.php',
      );

      final respuesta = await http
          .post(url, body: {"email": widget.email, "password": nuevaPassword})
          .timeout(const Duration(seconds: 10));

      final resultado = json.decode(respuesta.body);

      if (respuesta.statusCode == 200 && resultado['status'] == 'success') {
        _mostrarSnackBar(
          "¡Contraseña actualizada con éxito!",
          color: Colors.green,
        );

        Future.delayed(const Duration(seconds: 2), () {
          if (mounted) {
            Navigator.pushNamedAndRemoveUntil(context, '/', (route) => false);
          }
        });
      } else {
        _mostrarSnackBar(
          "Error: ${resultado['message'] ?? 'No se pudo actualizar'}",
        );
      }
    } catch (e) {
      debugPrint("Error de conexión: $e");
      _mostrarSnackBar("Error de conexión. Verifica tu servidor local.");
    } finally {
      if (mounted) setState(() => _isLoading = false);
    }
  }

  void _guardarNuevaContrasena() {
    final pass = _passController.text.trim();
    final confirm = _confirmPassController.text.trim();

    if (pass.isEmpty || confirm.isEmpty) {
      _mostrarSnackBar("Por favor, completa ambos campos.");
      return;
    }

    if (pass.length < 6) {
      _mostrarSnackBar("La contraseña debe tener al menos 6 caracteres.");
      return;
    }

    if (pass != confirm) {
      _mostrarSnackBar("Las contraseñas no coinciden.");
      return;
    }

    _actualizarEnServidor(pass);
  }

  void _mostrarSnackBar(
    String mensaje, {
    Color color = const Color(0xFFD32F2F),
  }) {
    ScaffoldMessenger.of(context).showSnackBar(
      SnackBar(
        content: Text(mensaje),
        backgroundColor: color,
        behavior: SnackBarBehavior.floating,
        duration: const Duration(seconds: 3),
      ),
    );
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      body: Stack(
        children: [
          _buildBackground(),
          SafeArea(
            child: Center(
              child: SingleChildScrollView(
                padding: const EdgeInsets.symmetric(horizontal: 30),
                child: Column(
                  children: [
                    const Icon(
                      Icons.lock_reset_rounded,
                      size: 80,
                      color: Colors.blueAccent,
                    ),
                    const SizedBox(height: 20),
                    const Text(
                      "Nueva Contraseña",
                      style: TextStyle(
                        color: Colors.white,
                        fontSize: 28,
                        fontWeight: FontWeight.bold,
                      ),
                    ),
                    const SizedBox(height: 10),
                    Text(
                      "Actualizando para: ${widget.email}",
                      style: const TextStyle(
                        color: Colors.white60,
                        fontSize: 13,
                      ),
                    ),
                    const SizedBox(height: 40),
                    _buildGlassForm(),
                  ],
                ),
              ),
            ),
          ),
        ],
      ),
    );
  }

  Widget _buildBackground() {
    return Container(
      decoration: const BoxDecoration(
        gradient: LinearGradient(
          begin: Alignment.topRight,
          end: Alignment.bottomLeft,
          colors: [Color(0xFF1B3470), Color(0xFF0D1B3E), Colors.black],
        ),
      ),
    );
  }

  Widget _buildGlassForm() {
    return ClipRRect(
      borderRadius: BorderRadius.circular(25),
      child: BackdropFilter(
        filter: ImageFilter.blur(sigmaX: 10, sigmaY: 10),
        child: Container(
          padding: const EdgeInsets.all(25),
          decoration: BoxDecoration(
            color: Colors.white.withValues(alpha: 0.08),
            borderRadius: BorderRadius.circular(25),
            border: Border.all(color: Colors.white10),
          ),
          child: Column(
            children: [
              _buildPasswordField(
                controller: _passController,
                label: "NUEVA CONTRASEÑA",
                isObscure: _isObscure,
                onToggle: () => setState(() => _isObscure = !_isObscure),
              ),
              const SizedBox(height: 20),
              _buildPasswordField(
                controller: _confirmPassController,
                label: "CONFIRMAR CONTRASEÑA",
                isObscure: _isObscureConfirm,
                onToggle: () =>
                    setState(() => _isObscureConfirm = !_isObscureConfirm),
              ),
              const SizedBox(height: 30),
              _buildActionButton(),
            ],
          ),
        ),
      ),
    );
  }

  Widget _buildPasswordField({
    required TextEditingController controller,
    required String label,
    required bool isObscure,
    required VoidCallback onToggle,
  }) {
    return Column(
      crossAxisAlignment: CrossAxisAlignment.start,
      children: [
        Text(
          label,
          style: const TextStyle(
            color: Colors.white60,
            fontSize: 11,
            fontWeight: FontWeight.bold,
          ),
        ),
        const SizedBox(height: 8),
        Container(
          decoration: BoxDecoration(
            color: Colors.black.withValues(alpha: 0.5),
            borderRadius: BorderRadius.circular(15),
            border: Border.all(color: Colors.white10),
          ),
          child: TextField(
            controller: controller,
            obscureText: isObscure,
            enabled: !_isLoading,
            style: const TextStyle(color: Colors.white),
            decoration: InputDecoration(
              prefixIcon: const Icon(
                Icons.vpn_key_outlined,
                color: Colors.blueAccent,
              ),
              suffixIcon: IconButton(
                icon: Icon(
                  isObscure ? Icons.visibility_off : Icons.visibility,
                  color: Colors.white38,
                ),
                onPressed: onToggle,
              ),

              border: InputBorder.none,
              contentPadding: const EdgeInsets.symmetric(vertical: 18),
            ),
          ),
        ),
      ],
    );
  }

  Widget _buildActionButton() {
    return SizedBox(
      width: double.infinity,
      height: 55,
      child: ElevatedButton(
        onPressed: _isLoading ? null : _guardarNuevaContrasena,
        style: ElevatedButton.styleFrom(
          backgroundColor: const Color(0xFFD32F2F),
          shape: RoundedRectangleBorder(
            borderRadius: BorderRadius.circular(15),
          ),
        ),
        child: _isLoading
            ? const SizedBox(
                height: 20,
                width: 20,
                child: CircularProgressIndicator(
                  color: Colors.white,
                  strokeWidth: 2,
                ),
              )
            : const Text(
                "ACTUALIZAR CONTRASEÑA",
                style: TextStyle(
                  color: Colors.white,
                  fontWeight: FontWeight.bold,
                ),
              ),
      ),
    );
  }
}
