import 'package:flutter/material.dart';

class MenuControllerApp {
  static List<Map<String, dynamic>> getMenuItems() {
    return [
      {
        'titulo': 'INTRANET',
        'icon': Icons.bolt,
        'color': const Color(0xFF1A3D81),
        'ruta': '/intranet',
      },
      {
        'titulo': 'Mis Cursos',
        'icon': Icons.menu_book,
        'color': const Color(0xFF1A3D81),
        'ruta': '/cursos',
      },
      {
        'titulo': 'Horario',
        'icon': Icons.calendar_month,
        'color': const Color(0xFF1A3D81),
        'ruta': '/horario',
      },
      {
        'titulo': 'Cronograma',
        'icon': Icons.receipt_long,
        'color': const Color(0xFF1A3D81),
        'ruta': '/cronograma',
      },
      {
        'titulo': 'Asistencia',
        'icon': Icons.check_circle_outline,
        'color': const Color(0xFF1A3D81),
        'ruta': '/asistencia',
      },
      {
        'titulo': 'Ranking',
        'icon': Icons.emoji_events,
        'color': const Color(0xFF1A3D81),
        'ruta': '/ranking',
      },
      {
        'titulo': 'Mi CUENTA',
        'icon': Icons.person,
        'color': const Color(0xFF1A3D81),
        'ruta': '/cuenta',
      },
      {
        'titulo': 'Mi IDENTIFICACIÓN',
        'icon': Icons.badge,
        'color': const Color(0xFF1A3D81),
        'ruta': '/perfil',
      },
    ];
  }
}
