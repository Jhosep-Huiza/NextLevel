import 'package:flutter/material.dart';

import 'dart:ui';

import 'dart:math';

import 'package:emailjs/emailjs.dart' as emailjs;

import 'pantalla_verificar_codigo.dart'; // Asegúrate de que el nombre coincida

class PantallaRecuperarClave extends StatefulWidget {
  const PantallaRecuperarClave({super.key});

  @override
  State<PantallaRecuperarClave> createState() => _PantallaRecuperarClaveState();
}

class _PantallaRecuperarClaveState extends State<PantallaRecuperarClave> {
  final TextEditingController _emailController = TextEditingController();

  bool _isLoading = false;

  Future<void> _enviarCodigo() async {
    final email = _emailController.text.trim();

    if (email.isEmpty || !email.contains('@')) {
      _mostrarSnackBar("Por favor, ingresa un correo electrónico válido.");

      return;
    }

    setState(() => _isLoading = true);

    // Generamos el código de 5 dígitos

    final String codigoGenerado = (Random().nextInt(90000) + 10000).toString();

    try {
      // 1. Preparamos los datos exactamente como los espera tu plantilla

      Map<String, dynamic> templateParams = {
        'email': email, // Debe coincidir con {{email}}

        'verification_code':
            codigoGenerado, // Debe coincidir con {{verification_code}}
      };

      // 2. Enviamos usando la sintaxis simplificada

      await emailjs.send(
        'service_rxmta7j',

        'template_do0zvaf',

        templateParams,

        emailjs.Options(
          publicKey: '04r_LaaJt4QfWzl71',

          privateKey: 'XjmuVCxeieqqyl2zpWGoD',
        ),
      );

      if (!mounted) return;

      _mostrarSnackBar("¡Código enviado con éxito!");

      // Navegamos a la pantalla de verificación enviando los datos necesarios

      Navigator.push(
        context,

        MaterialPageRoute(
          builder: (context) => PantallaVerificarCodigo(
            emailUsuario: email,

            codigoCorrecto: codigoGenerado,
          ),
        ),
      );
    } catch (error) {
      _mostrarSnackBar("Error al enviar el correo: $error");
    } finally {
      setState(() => _isLoading = false);
    }
  }

  void _mostrarSnackBar(String mensaje) {
    ScaffoldMessenger.of(context).showSnackBar(
      SnackBar(
        content: Text(mensaje),

        backgroundColor: const Color(0xFFD32F2F),
      ),
    );
  }

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      extendBodyBehindAppBar: true,

      appBar: AppBar(
        backgroundColor: Colors.transparent,

        elevation: 0,

        leading: IconButton(
          icon: const Icon(Icons.arrow_back_ios_new, color: Colors.white),

          onPressed: () => Navigator.pop(context),
        ),
      ),

      body: Stack(
        children: [
          Container(
            decoration: const BoxDecoration(
              gradient: LinearGradient(
                begin: Alignment.topRight,

                end: Alignment.bottomLeft,

                colors: [Color(0xFF1B3470), Color(0xFF0D1B3E), Colors.black],
              ),
            ),
          ),

          SafeArea(
            child: SingleChildScrollView(
              padding: const EdgeInsets.symmetric(horizontal: 30),

              child: Column(
                children: [
                  const SizedBox(height: 40),

                  _buildHeaderIcon(),

                  const SizedBox(height: 30),

                  const Text(
                    "Recuperar Clave",

                    style: TextStyle(
                      color: Colors.white,

                      fontSize: 28,

                      fontWeight: FontWeight.bold,
                    ),
                  ),

                  const SizedBox(height: 15),

                  const Text(
                    "Introduce tu correo real para recibir el código de 5 dígitos.",

                    textAlign: TextAlign.center,

                    style: TextStyle(color: Colors.white60, fontSize: 14),
                  ),

                  const SizedBox(height: 50),

                  ClipRRect(
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
                            _buildEmailField(),

                            const SizedBox(height: 30),

                            _isLoading
                                ? const CircularProgressIndicator(
                                    color: Colors.blueAccent,
                                  )
                                : _buildActionButton(),
                          ],
                        ),
                      ),
                    ),
                  ),
                ],
              ),
            ),
          ),
        ],
      ),
    );
  }

  Widget _buildHeaderIcon() {
    return Container(
      padding: const EdgeInsets.all(20),

      decoration: BoxDecoration(
        color: Colors.white.withValues(alpha: 0.05),

        shape: BoxShape.circle,
      ),

      child: const Icon(
        Icons.mark_email_read_outlined,

        size: 80,

        color: Colors.blueAccent,
      ),
    );
  }

  Widget _buildEmailField() {
    return Column(
      crossAxisAlignment: CrossAxisAlignment.start,

      children: [
        const Text(
          "Correo Electrónico",

          style: TextStyle(color: Colors.white60, fontSize: 12),
        ),

        const SizedBox(height: 8),

        Container(
          decoration: BoxDecoration(
            color: Colors.black.withValues(alpha: 0.2),

            borderRadius: BorderRadius.circular(15),

            border: Border.all(color: Colors.white10),
          ),

          child: TextField(
            controller: _emailController,

            keyboardType: TextInputType.emailAddress,

            style: const TextStyle(color: Colors.white),

            decoration: const InputDecoration(
              prefixIcon: Icon(Icons.email_outlined, color: Colors.blueAccent),

              hintText: "ejemplo@correo.com",

              hintStyle: TextStyle(color: Colors.white24),

              border: InputBorder.none,

              contentPadding: EdgeInsets.symmetric(vertical: 18),
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
        onPressed: _enviarCodigo,

        style: ElevatedButton.styleFrom(
          backgroundColor: const Color(0xFFD32F2F),

          shape: RoundedRectangleBorder(
            borderRadius: BorderRadius.circular(15),
          ),
        ),

        child: const Text(
          "ENVIAR CÓDIGO",

          style: TextStyle(
            color: Colors.white,

            fontWeight: FontWeight.bold,

            letterSpacing: 1.2,
          ),
        ),
      ),
    );
  }
}
