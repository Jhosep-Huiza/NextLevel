import 'package:flutter/material.dart';
import 'package:flutter/foundation.dart';
import 'dart:ui' as ui;
import 'package:http/http.dart' as http;
import 'dart:convert';

class PantallaLogin extends StatefulWidget {
  const PantallaLogin({super.key});

  @override
  State<PantallaLogin> createState() => _PantallaLoginState();
}

class _PantallaLoginState extends State<PantallaLogin> {
  final TextEditingController _userController = TextEditingController(
    text: '98765432@NextLevelAcademy.pe',
  );
  final TextEditingController _passController = TextEditingController(
    text: '13042026',
  );
  bool _isObscure = true;
  bool _isLoading = false;

  Future<void> _ingresar() async {
    final String identificador = _userController.text.trim();
    final String password = _passController.text.trim();

    if (identificador.isEmpty || password.isEmpty) {
      _mostrarError("Por favor, llena todos los campos");
      return;
    }

    setState(() => _isLoading = true);

    try {
      final url = Uri.parse('http://172.25.72.225/api_flutter/login.php');

      final response = await http
          .post(
            url,
            headers: {'Content-Type': 'application/json'},
            body: json.encode({'usuario': identificador, 'password': password}),
          )
          .timeout(const Duration(seconds: 5));

      final data = json.decode(response.body);

      if (response.statusCode == 200 && data['success']) {
        if (!mounted) return;
        Navigator.pushReplacementNamed(context, '/home');
      } else {
        _mostrarError(data['error'] ?? "Usuario o contraseña incorrectos");
      }
    } catch (e) {
      if (e.toString().contains('timeout')) {
        _mostrarError(
          "Tiempo agotado (5s). Inicia XAMPP/Apache en 172.25.72.225 y verifica tu conexión.",
        );
      } else {
        debugPrint("Error de conexión: $e");
        _mostrarError("No conecta a servidor 172.25.72.225. Inicia XAMPP.");
      }
    } finally {
      if (mounted) setState(() => _isLoading = false);
    }
  }

  void _mostrarError(String mensaje) {
    ScaffoldMessenger.of(context).showSnackBar(
      SnackBar(
        content: Text(mensaje),
        backgroundColor: const Color(0xFFD32F2F),
        behavior: SnackBarBehavior.floating,
      ),
    );
  }

  void _irAuxiliar() {
    Navigator.pushNamed(context, '/auxiliar');
  }

  void _irApoderado() {
    Navigator.pushNamed(context, '/apoderado');
  }

  @override
  Widget build(BuildContext context) {
    final size = MediaQuery.of(context).size;

    return Scaffold(
      body: Stack(
        children: [
          _buildBackground(size),
          SafeArea(
            child: Stack(
              children: [
                Center(
                  child: SingleChildScrollView(
                    padding: const EdgeInsets.all(25),
                    child: Column(
                      mainAxisAlignment: MainAxisAlignment.center,
                      children: [
                        _buildLogo(),
                        const SizedBox(height: 20),
                        _buildTitle(),
                        const SizedBox(height: 10),
                        _buildSubtitle(),
                        const SizedBox(height: 40),
                        _buildGlassCard(),
                        const SizedBox(height: 20),
                        _buildForgotPassword(),
                      ],
                    ),
                  ),
                ),
                _buildVersionFooter(),
                _buildCornerButtons(),
              ],
            ),
          ),
        ],
      ),
    );
  }

  Widget _buildBackground(Size size) {
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

  Widget _buildLogo() {
    return Container(
      height: 100,
      width: 100,
      decoration: BoxDecoration(
        shape: BoxShape.circle,
        color: Colors.white.withOpacity(0.1),
      ),
      child: ClipOval(
        child: Image.asset(
          'assets/next_level_logo.png',
          fit: BoxFit.cover,
          errorBuilder: (context, error, stackTrace) =>
              const Icon(Icons.school, color: Colors.white, size: 50),
        ),
      ),
    );
  }

  Widget _buildTitle() {
    return const Text(
      "NEXT LEVEL",
      style: TextStyle(
        color: Colors.white,
        fontSize: 35,
        fontWeight: FontWeight.bold,
      ),
    );
  }

  Widget _buildSubtitle() {
    return const Text(
      "ACCESO ALUMNO",
      style: TextStyle(
        color: Colors.blueAccent,
        letterSpacing: 5,
        fontSize: 12,
      ),
    );
  }

  Widget _buildGlassCard() {
    return ClipRRect(
      borderRadius: BorderRadius.circular(30),
      child: BackdropFilter(
        filter: ui.ImageFilter.blur(sigmaX: 10, sigmaY: 10),
        child: Container(
          padding: const EdgeInsets.all(25),
          decoration: BoxDecoration(
            color: Colors.white.withOpacity(0.08),
            borderRadius: BorderRadius.circular(30),
            border: Border.all(color: Colors.white.withOpacity(0.15)),
          ),
          child: Column(
            children: [
              _buildModernField(
                controller: _userController,
                label: "Usuario",
                icon: Icons.person_outline,
              ),
              const SizedBox(height: 20),
              _buildModernField(
                controller: _passController,
                label: "Contraseña",
                icon: Icons.lock_outline,
                isPassword: true,
              ),
              const SizedBox(height: 30),
              _isLoading
                  ? const CircularProgressIndicator(color: Colors.blueAccent)
                  : _buildLoginButton(),
            ],
          ),
        ),
      ),
    );
  }

  Widget _buildModernField({
    required TextEditingController controller,
    required String label,
    required IconData icon,
    bool isPassword = false,
  }) {
    return TextField(
      controller: controller,
      obscureText: isPassword ? _isObscure : false,
      style: const TextStyle(color: Colors.white),
      decoration: InputDecoration(
        labelText: label,
        labelStyle: const TextStyle(color: Colors.white60),
        prefixIcon: Icon(icon, color: Colors.blueAccent),
        suffixIcon: isPassword
            ? IconButton(
                icon: Icon(
                  _isObscure ? Icons.visibility_off : Icons.visibility,
                  color: Colors.white38,
                ),
                onPressed: () => setState(() => _isObscure = !_isObscure),
              )
            : null,
        enabledBorder: const UnderlineInputBorder(
          borderSide: BorderSide(color: Colors.white24),
        ),
        focusedBorder: const UnderlineInputBorder(
          borderSide: BorderSide(color: Colors.blueAccent),
        ),
      ),
    );
  }

  Widget _buildLoginButton() {
    return SizedBox(
      width: double.infinity,
      height: 55,
      child: ElevatedButton(
        onPressed: _isLoading ? null : _ingresar,
        style: ElevatedButton.styleFrom(
          backgroundColor: const Color(0xFFD32F2F),
          shape: RoundedRectangleBorder(
            borderRadius: BorderRadius.circular(15),
          ),
        ),
        child: const Text(
          "INICIAR SESIÓN",
          style: TextStyle(color: Colors.white, fontWeight: FontWeight.bold),
        ),
      ),
    );
  }

  Widget _buildForgotPassword() {
    return TextButton(
      onPressed: () {
        Navigator.pushNamed(context, '/recuperar');
      },
      child: const Text(
        "¿Olvidaste tu contraseña?",
        style: TextStyle(color: Colors.white70, fontWeight: FontWeight.w400),
      ),
    );
  }

  Widget _buildCornerButtons() {
    return Positioned(
      top: 16,
      right: 16,
      child: Row(
        children: [
          _buildCornerButton("Auxiliar", Icons.support_agent, _irAuxiliar),
          const SizedBox(width: 10),
          _buildCornerButton("Apoderado", Icons.family_restroom, _irApoderado),
        ],
      ),
    );
  }

  Widget _buildCornerButton(String label, IconData icon, VoidCallback onTap) {
    return GestureDetector(
      onTap: onTap,
      child: Container(
        padding: const EdgeInsets.symmetric(horizontal: 12, vertical: 8),
        decoration: BoxDecoration(
          color: Colors.white.withOpacity(0.1),
          borderRadius: BorderRadius.circular(20),
          border: Border.all(color: Colors.white.withOpacity(0.2)),
        ),
        child: Row(
          mainAxisSize: MainAxisSize.min,
          children: [
            Icon(icon, color: Colors.white70, size: 18),
            const SizedBox(width: 6),
            Text(
              label,
              style: const TextStyle(
                color: Colors.white70,
                fontSize: 12,
                fontWeight: FontWeight.w500,
              ),
            ),
          ],
        ),
      ),
    );
  }

  Widget _buildVersionFooter() {
    return Positioned(
      bottom: 20,
      left: 0,
      right: 0,
      child: const Text(
        "Versión 2.0.0",
        textAlign: TextAlign.center,
        style: TextStyle(color: Colors.white24, fontSize: 12),
      ),
    );
  }
}
