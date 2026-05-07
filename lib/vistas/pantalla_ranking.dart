import 'package:flutter/material.dart';

// Modelo de datos simple para representar cada salón
class SalonRanking {
  final String nombre;
  final int puntos;
  final int posicion;

  SalonRanking({
    required this.nombre,
    required this.puntos,
    required this.posicion,
  });
}

class PantallaRanking extends StatelessWidget {
  const PantallaRanking({super.key});

  @override
  Widget build(BuildContext context) {
    // Datos de ejemplo (Normalmente vendrían de una API o Firebase)
    final List<SalonRanking> rankings = [
      SalonRanking(nombre: "6to Grado A", puntos: 2500, posicion: 1),
      SalonRanking(nombre: "5to Grado B", puntos: 2350, posicion: 2),
      SalonRanking(nombre: "4to Grado A", puntos: 2100, posicion: 3),
      SalonRanking(nombre: "6to Grado B", puntos: 1800, posicion: 4),
      SalonRanking(nombre: "3er Grado C", puntos: 1500, posicion: 5),
      SalonRanking(nombre: "1ero Grado A", puntos: 1200, posicion: 6),
    ];

    return Scaffold(
      appBar: AppBar(
        title: const Text('Ranking de Salones'),
        centerTitle: true,
        backgroundColor: Colors.indigo,
        foregroundColor: Colors.white,
      ),
      body: Column(
        children: [
          _buildHeader(), // Un encabezado visualmente atractivo
          Expanded(
            child: ListView.builder(
              padding: const EdgeInsets.all(10),
              itemCount: rankings.length,
              itemBuilder: (context, index) {
                final salon = rankings[index];
                return _buildRankingCard(salon);
              },
            ),
          ),
        ],
      ),
    );
  }

  // Widget para el encabezado con estilo de trofeo o podio
  Widget _buildHeader() {
    return Container(
      padding: const EdgeInsets.all(20),
      decoration: const BoxDecoration(
        color: Colors.indigo,
        borderRadius: BorderRadius.only(
          bottomLeft: Radius.circular(30),
          bottomRight: Radius.circular(30),
        ),
      ),
      child: const Column(
        children: [
          Icon(Icons.emoji_events, size: 80, color: Colors.amber),
          SizedBox(height: 10),
          Text(
            "¡Líderes de la Semana!",
            style: TextStyle(
              color: Colors.white,
              fontSize: 22,
              fontWeight: FontWeight.bold,
            ),
          ),
        ],
      ),
    );
  }

  // Widget para cada fila del ranking
  Widget _buildRankingCard(SalonRanking salon) {
    // Colores especiales para el top 3
    Color colorPosicion = Colors.grey.shade300;
    if (salon.posicion == 1) colorPosicion = Colors.amber;
    if (salon.posicion == 2) colorPosicion = Colors.grey;
    if (salon.posicion == 3) colorPosicion = Colors.brown.shade300;

    return Card(
      elevation: 3,
      margin: const EdgeInsets.symmetric(vertical: 8),
      shape: RoundedRectangleBorder(borderRadius: BorderRadius.circular(15)),
      child: ListTile(
        leading: CircleAvatar(
          backgroundColor: colorPosicion,
          child: Text(
            "#${salon.posicion}",
            style: const TextStyle(
              fontWeight: FontWeight.bold,
              color: Colors.black87,
            ),
          ),
        ),
        title: Text(
          salon.nombre,
          style: const TextStyle(fontWeight: FontWeight.bold, fontSize: 18),
        ),
        subtitle: const Text("Puntaje acumulado"),
        trailing: Text(
          "${salon.puntos} pts",
          style: const TextStyle(
            color: Colors.indigo,
            fontWeight: FontWeight.bold,
            fontSize: 16,
          ),
        ),
      ),
    );
  }
}
