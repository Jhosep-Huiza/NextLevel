import 'package:flutter/material.dart';
import 'pantalla_detalle_curso.dart'; 

class PantallaCursos extends StatelessWidget {
  const PantallaCursos({super.key});

  @override
  Widget build(BuildContext context) {
    final List<String> cursos = [
      'RAZ. VERBAL',
      'RAZ. MATEMÁTICO',
      'ARITMÉTICA',
      'ÁLGEBRA',
      'GEOMETRÍA',
      'TRIGONOMETRÍA',
      'LENGUAJE',
      'LITERATURA',
      'PSICOLOGIA',
      'CIVICA',
      'HISTORIA DEL PERÚ',
      'HISTORIA UNIVERSAL',
      'GEOGRAFÍA',
      'ECONOMÍA',
      'FÍSICA',
      'QUÍMICA',
      'BIOLOGÍA',
      'INGLÉS',
    ];

    return Scaffold(
      backgroundColor: const Color(0xFFF5F5F5),
      appBar: AppBar(
        title: const Text('Mis Cursos'),
        backgroundColor: const Color(0xFF0D1B3E),
        foregroundColor: Colors.white,
      ),
      body: ListView.builder(
        padding: const EdgeInsets.all(15),
        itemCount: cursos.length,
        itemBuilder: (context, index) {
          return Container(
            margin: const EdgeInsets.only(bottom: 10),
            decoration: BoxDecoration(
              color: Colors.white,
              borderRadius: BorderRadius.circular(10),
              boxShadow: [
                BoxShadow(
                  color: Colors.black.withValues(alpha: 0.05), // CORREGIDO
                  blurRadius: 5,
                  offset: const Offset(0, 2),
                ),
              ],
            ),
            child: ListTile(
              leading: Container(
                padding: const EdgeInsets.all(8),
                decoration: BoxDecoration(
                  color: const Color(0xFF0D1B3E).withValues(alpha: 0.1), // CORREGIDO
                  shape: BoxShape.circle,
                ),
                child: const Icon(
                  Icons.menu_book,
                  color: Color(0xFF1A3D81),
                  size: 20,
                ),
              ),
              title: Text(
                cursos[index],
                style: const TextStyle(
                  fontWeight: FontWeight.bold,
                  fontSize: 14,
                  color: Color(0xFF0D1B3E),
                ),
              ),
              subtitle: const Text('Ciclo Académico 2026'),
              trailing: const Icon(
                Icons.arrow_forward_ios, 
                size: 14, 
                color: Colors.grey
              ),
              onTap: () {
                Navigator.push(
                  context,
                  MaterialPageRoute(
                    builder: (context) => PantallaDetalleCurso(nombreCurso: cursos[index]),
                  ),
                );
              },
            ),
          );
        },
      ),
    );
  }
}