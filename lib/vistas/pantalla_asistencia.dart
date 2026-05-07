import 'package:flutter/material.dart';

class PantallaAsistencia extends StatelessWidget {
  const PantallaAsistencia({super.key});

  @override
  Widget build(BuildContext context) {
    final asistencias = [
      {'fecha': '2026-02-01', 'estado': 'Presente'},
      {'fecha': '2026-02-02', 'estado': 'Presente'},
      {'fecha': '2026-02-03', 'estado': 'Tarde'},
      {'fecha': '2026-02-04', 'estado': 'Falta'},
    ];

    Color estadoColor(String estado) {
      switch (estado) {
        case 'Presente':
          return Colors.green;
        case 'Tarde':
          return Colors.orange;
        case 'Falta':
          return Colors.red;
        default:
          return Colors.grey;
      }
    }

    return Scaffold(
      appBar: AppBar(
        title: const Text('Asistencia'),
        backgroundColor: const Color(0xFF0D1B3E),
        foregroundColor: Colors.white,
      ),
      body: ListView.builder(
        padding: const EdgeInsets.all(16),
        itemCount: asistencias.length,
        itemBuilder: (context, index) {
          final item = asistencias[index];
          final color = estadoColor(item['estado']!);

          return Card(
            elevation: 2,
            shape: RoundedRectangleBorder(
              borderRadius: BorderRadius.circular(12),
            ),
            margin: const EdgeInsets.only(bottom: 12),
            child: ListTile(
              leading: const Icon(
                Icons.calendar_today,
                color: Color(0xFF1A3D81),
              ),
              title: Text(
                item['fecha']!,
                style: const TextStyle(fontWeight: FontWeight.w600),
              ),
              trailing: Chip(
                label: Text(item['estado']!),
                // CORREGIDO: Uso de withValues para evitar avisos de deprecación
                backgroundColor: color.withValues(alpha: 0.2),
                labelStyle: TextStyle(
                  color: color,
                  fontWeight: FontWeight.bold,
                ),
                side: BorderSide.none,
                shape: const StadiumBorder(),
              ),
            ),
          );
        },
      ),  
    );
  }
}
