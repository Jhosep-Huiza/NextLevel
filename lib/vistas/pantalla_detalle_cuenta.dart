import 'package:flutter/material.dart';

class PantallaDetalleCuenta extends StatelessWidget {
  const PantallaDetalleCuenta({super.key, this.nombreCurso});

  final String? nombreCurso;

  @override
  Widget build(BuildContext context) {
    const Color azulSenati = Color(0xFF1A4693);
    const Color azulClaro = Color(0xFF4A90E2);

    return Scaffold(
      backgroundColor: Colors.white,
      appBar: AppBar(
        backgroundColor: azulSenati,
        title: const Text(
          'Datos Personales',
          style: TextStyle(color: Colors.white),
        ),
        leading: IconButton(
          icon: const Icon(Icons.arrow_back, color: Colors.white),
          onPressed: () => Navigator.of(context).pop(),
        ),
      ),
      body: SingleChildScrollView(
        child: Column(
          crossAxisAlignment: CrossAxisAlignment.start,
          children: [
            // --- CABECERA (FOTO Y NOMBRE) ---
            Padding(
              padding: const EdgeInsets.all(20.0),
              child: Row(
                children: [
                  Container(
                    decoration: BoxDecoration(
                      shape: BoxShape.circle,
                      border: Border.all(color: azulClaro, width: 3),
                    ),
                    child: const CircleAvatar(
                      radius: 40,
                      backgroundColor: Colors.white,
                      child: Icon(Icons.person, size: 55, color: azulClaro),
                    ),
                  ),
                  const SizedBox(width: 20),
                  Expanded(
                    child: Column(
                      crossAxisAlignment: CrossAxisAlignment.start,
                      children: [
                        const Text(
                          "Manuel Antonio",
                          style: TextStyle(
                            fontSize: 18,
                            fontWeight: FontWeight.bold,
                          ),
                        ),
                        const Text(
                          "Garay Rivera",
                          style: TextStyle(fontSize: 16),
                        ),
                        const SizedBox(height: 4),
                        Text(
                          "DNI : 61245455",
                          style: TextStyle(color: Colors.grey[700]),
                        ),
                        const Text(
                          "ID: 001624288",
                          style: TextStyle(
                            color: azulClaro,
                            fontWeight: FontWeight.bold,
                          ),
                        ),
                      ],
                    ),
                  ),
                ],
              ),
            ),
            const Divider(),

            // --- SECCIÓN CORREOS ---
            _buildSectionHeader(
              "Correos",
              const Color.fromARGB(255, 8, 44, 85),
            ),
            _buildInfoRow("Manu***@GMAIL.COM", "Principal"),
            const Divider(),

            // --- SECCIÓN TELÉFONOS ---
            _buildSectionHeader("Teléfonos", azulClaro),
            _buildInfoRow("9454*******", null),
            _buildInfoRow("9526*******", null),
            const Divider(),

            // --- SECCIÓN DIRECCIONES ---
            _buildSectionHeader("Direcciones", azulClaro),
            const Padding(
              padding: EdgeInsets.symmetric(horizontal: 20, vertical: 10),
              child: Text(
                "No tienes direcciones registradas",
                style: TextStyle(color: Colors.black54, fontSize: 16),
              ),
            ),
          ],
        ),
      ),
    );
  }

  Widget _buildSectionHeader(String title, Color color) {
    return Padding(
      padding: const EdgeInsets.fromLTRB(20, 15, 20, 10),
      child: Text(
        title,
        style: TextStyle(
          color: color,
          fontSize: 16,
          fontWeight: FontWeight.bold,
        ),
      ),
    );
  }

  Widget _buildInfoRow(String text, String? label) {
    return Padding(
      padding: const EdgeInsets.symmetric(horizontal: 20, vertical: 8),
      child: Row(
        mainAxisAlignment: MainAxisAlignment.spaceBetween,
        children: [
          Text(text, style: const TextStyle(fontSize: 16)),
          if (label != null)
            Container(
              padding: const EdgeInsets.symmetric(horizontal: 12, vertical: 4),
              decoration: BoxDecoration(
                color: const Color(0xFF1A4693),
                borderRadius: BorderRadius.circular(20),
              ),
              child: Text(
                label,
                style: const TextStyle(color: Colors.white, fontSize: 12),
              ),
            ),
        ],
      ),
    );
  }
}
