import 'package:flutter/material.dart';

class MenuItemModel {
  final String titulo;
  final IconData icon;
  final Color color;
  final String ruta;

  MenuItemModel({
    required this.titulo,
    required this.icon,
    required this.color,
    required this.ruta,
  });
}