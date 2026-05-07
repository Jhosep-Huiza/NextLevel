import 'package:flutter/material.dart';

import 'package:mi_app/vistas/pantalla_nueva_contrasena.dart';

// Cambiamos el nombre del archivo importado (sin la ñ)

class PantallaVerificarCodigo extends StatefulWidget {
  final String emailUsuario;

  final String codigoCorrecto;

  const PantallaVerificarCodigo({
    super.key,

    required this.emailUsuario,

    required this.codigoCorrecto,
  });

  @override
  State<PantallaVerificarCodigo> createState() =>
      _PantallaVerificarCodigoState();
}

class _PantallaVerificarCodigoState extends State<PantallaVerificarCodigo> {
  final TextEditingController _codigoController = TextEditingController();

  void _validarCodigo() {
    if (_codigoController.text.trim() == widget.codigoCorrecto) {
      ScaffoldMessenger.of(context).showSnackBar(
        const SnackBar(
          content: Text("¡Código correcto!"),

          backgroundColor: Colors.green,
        ),
      );

      // NAVEGACIÓN CORREGIDA: Pasamos el email que requiere la siguiente pantalla

      Navigator.pushReplacement(
        context,

        MaterialPageRoute(
          builder: (context) =>
              PantallaNuevaContrasena(email: widget.emailUsuario),
        ),
      );
    } else {
      ScaffoldMessenger.of(context).showSnackBar(
        const SnackBar(
          content: Text("Código incorrecto. Intenta de nuevo."),

          backgroundColor: Colors.red,
        ),
      );
    }
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
              padding: const EdgeInsets.all(30.0),

              child: Column(
                children: [
                  const SizedBox(height: 40),

                  const Icon(
                    Icons.security,
                    size: 80,
                    color: Colors.blueAccent,
                  ),

                  const SizedBox(height: 20),

                  const Text(
                    "Verificar Código",

                    style: TextStyle(
                      color: Colors.white,
                      fontSize: 28,
                      fontWeight: FontWeight.bold,
                    ),
                  ),

                  const SizedBox(height: 15),

                  Text(
                    "Enviamos un código de 5 dígitos a:\n${widget.emailUsuario}",

                    textAlign: TextAlign.center,

                    style: const TextStyle(color: Colors.white70, fontSize: 14),
                  ),

                  const SizedBox(height: 50),

                  TextField(
                    controller: _codigoController,

                    keyboardType: TextInputType.number,

                    maxLength: 5,

                    textAlign: TextAlign.center,

                    style: const TextStyle(
                      color: Colors.white,

                      fontSize: 32,

                      letterSpacing: 10,

                      fontWeight: FontWeight.bold,
                    ),

                    decoration: InputDecoration(
                      counterStyle: const TextStyle(color: Colors.white38),

                      filled: true,

                      fillColor: Colors.white.withValues(alpha: 0.1),

                      hintText: "00000",

                      hintStyle: const TextStyle(color: Colors.white12),

                      border: OutlineInputBorder(
                        borderRadius: BorderRadius.circular(15),

                        borderSide: BorderSide.none,
                      ),
                    ),
                  ),

                  const SizedBox(height: 30),

                  SizedBox(
                    width: double.infinity,

                    height: 55,

                    child: ElevatedButton(
                      onPressed: _validarCodigo,

                      style: ElevatedButton.styleFrom(
                        backgroundColor: const Color(0xFFD32F2F),

                        shape: RoundedRectangleBorder(
                          borderRadius: BorderRadius.circular(15),
                        ),
                      ),

                      child: const Text(
                        "VERIFICAR",

                        style: TextStyle(
                          color: Colors.white,
                          fontWeight: FontWeight.bold,
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
}
