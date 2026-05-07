import 'package:flutter/material.dart';

class PantallaDetalleCurso extends StatelessWidget {
  final String nombreCurso;

  const PantallaDetalleCurso({super.key, required this.nombreCurso});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text(nombreCurso),
        backgroundColor: const Color(0xFF0D1B3E),
        foregroundColor: Colors.white,
      ),
      body: Padding(
        padding: const EdgeInsets.all(20.0),
        child: Column(
          children: [
            // Tarjeta de Información Principal
            Card(
              elevation: 4,
              shape: RoundedRectangleBorder(
                borderRadius: BorderRadius.circular(15),
              ),
              child: Padding(
                padding: const EdgeInsets.all(20.0),
                child: Column(
                  children: [
                    const SizedBox(height: 15),
                    Text(
                      nombreCurso,
                      textAlign: TextAlign.center,
                      style: const TextStyle(
                        fontSize: 22,
                        fontWeight: FontWeight.bold,
                      ),
                    ),
                    const Divider(height: 30),
                    _buildInfoRow(Icons.school, "Docente:", "Prof. Juan Pérez"),
                    const SizedBox(height: 15),
                    _buildInfoRow(
                      Icons.analytics,
                      "Promedio Final:",
                      "16.5",
                      isGrade: true,
                    ),
                  ],
                ),
              ),
            ),
            const SizedBox(height: 20),
            const Text(
              "Detalle de Calificaciones",
              style: TextStyle(fontWeight: FontWeight.bold, fontSize: 18),
            ),
            // Aquí podrías agregar una lista de notas parciales más adelante
          ],
        ),
      ),
    );
  }

  Widget _buildInfoRow(
    IconData icon,
    String label,
    String value, {
    bool isGrade = false,
  }) {
    return Row(
      children: [
        Icon(icon, color: const Color(0xFFD32F2F)),
        const SizedBox(width: 10),
        Text(label, style: const TextStyle(fontWeight: FontWeight.w600)),
        const Spacer(),
        Text(
          value,
          style: TextStyle(
            fontWeight: FontWeight.bold,
            fontSize: 16,
            color: isGrade ? Colors.green : Colors.black,
          ),
        ),
      ],
    );
  }
}
