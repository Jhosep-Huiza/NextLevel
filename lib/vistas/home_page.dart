import 'package:flutter/material.dart';
import '../controladores/menu_controller.dart';

const Color kBgColor = Colors.white;
const Color kCardColor = Color(0xFF0F2A5F); // El azul oscuro original
const Color kRojoAcento = Color(0xFFEF4444); // El rojo de los bordes

class HomePage extends StatelessWidget {
  const HomePage({super.key});

  @override
  Widget build(BuildContext context) {
    final menuItems = MenuControllerApp.getMenuItems();

    return Scaffold(
      backgroundColor: kBgColor,
      body: Column(
        children: [
          _buildFullHeader(),
          Expanded(child: _buildStaticGrid(menuItems)),
          const SizedBox(height: 10),
        ],
      ),
    );
  }

  Widget _buildFullHeader() {
    return Container(
      width: double.infinity,
      height: 166,
      decoration: const BoxDecoration(color: kCardColor),
      child: Image.asset(
        'assets/logoa.png',
        fit: BoxFit.cover,
        alignment: Alignment.center,
        errorBuilder: (context, _, _) =>
            const Icon(Icons.school, color: Colors.white, size: 90),
      ),
    );
  }

  Widget _buildStaticGrid(List<Map<String, dynamic>> items) {
    return Transform.translate(
      // Cambia el -20 por un número más alto (ej. -40) si quieres que suban todavía más
      offset: const Offset(0, -20),
      child: Padding(
        padding: const EdgeInsets.symmetric(horizontal: 20),
        child: GridView.builder(
          physics: const NeverScrollableScrollPhysics(),
          shrinkWrap: true,
          gridDelegate: const SliverGridDelegateWithFixedCrossAxisCount(
            crossAxisCount: 2,
            mainAxisSpacing: 12,
            crossAxisSpacing: 12,
            childAspectRatio: 1.20,
          ),
          itemCount: items.length,
          itemBuilder: (context, index) => _MenuTile(item: items[index]),
        ),
      ),
    );
  }
}

class _MenuTile extends StatefulWidget {
  final Map<String, dynamic> item;
  const _MenuTile({required this.item});

  @override
  State<_MenuTile> createState() => _MenuTileState();
}

class _MenuTileState extends State<_MenuTile> {
  bool _isPressed = false;

  @override
  Widget build(BuildContext context) {
    final String titulo = (widget.item['titulo'] ?? '');

    return GestureDetector(
      onTapDown: (_) => setState(() => _isPressed = true),
      onTapUp: (_) => setState(() => _isPressed = false),
      onTapCancel: () => setState(() => _isPressed = false),
      onTap: () => Navigator.pushNamed(context, widget.item['ruta'] ?? '/'),
      child: AnimatedContainer(
        duration: const Duration(milliseconds: 100),
        decoration: BoxDecoration(
          color: Colors.white,
          borderRadius: BorderRadius.circular(
            25,
          ), // Bordes más redondeados como en la imagen
          boxShadow: _isPressed
              ? []
              : [
                  BoxShadow(
                    color: Colors.black.withOpacity(0.05),
                    offset: const Offset(0, 4),
                    blurRadius: 10,
                  ),
                ],
          border: Border.all(color: Colors.grey.shade200),
        ),
        child: Column(
          mainAxisAlignment: MainAxisAlignment.center,
          children: [
            // ESTE ES EL CÍRCULO CON FONDO AZUL Y BORDE ROJO
            Container(
              width: 58,
              height: 58,
              decoration: BoxDecoration(
                shape: BoxShape.circle,
                color: kCardColor, // Fondo del círculo: Azul Oscuro
                border: Border.all(
                  color: kRojoAcento, // Color del aro: Rojo
                  width: 3, // Grosor del aro rojo
                ),
              ),
              child: Icon(
                widget.item['icon'] ?? Icons.grid_view,
                size: 28,
                color: Colors.white, // Icono siempre blanco para que resalte
              ),
            ),
            const SizedBox(height: 12),
            Text(
              titulo,
              textAlign: TextAlign.center,
              style: const TextStyle(
                fontSize: 13,
                fontWeight: FontWeight.w800, // Fuente gruesa
                color: Color(0xFF1E293B), // Color de texto legible
              ),
            ),
          ],
        ),
      ),
    );
  }
}
