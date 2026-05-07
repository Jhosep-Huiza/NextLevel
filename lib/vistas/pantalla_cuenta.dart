import 'package:flutter/material.dart';
import 'pantalla_login.dart';
import 'pantalla_detalle_cuenta.dart';

class PantallaCuenta extends StatelessWidget {
  const PantallaCuenta({super.key});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        backgroundColor: const Color(0xFF1A4693),
        title: const Text('Mi Cuenta', style: TextStyle(color: Colors.white)),
        leading: IconButton(
          icon: const Icon(Icons.arrow_back, color: Colors.white),
          onPressed: () => Navigator.of(context).pop(),
        ),
      ),
      body: ListView(
        children: [
          _buildSectionHeader('Mis Datos'),
          _buildListTile(
            context,
            Icons.person,
            'Datos personales',
            const Color(0xFF1A4693),
            () {
              Navigator.push(
                context,
                MaterialPageRoute(
                  builder: (context) => const PantallaDetalleCuenta(
                    nombreCurso: 'Datos personales',
                  ),
                ),
              );
            },
          ),
          const Divider(height: 1, indent: 16, endIndent: 16),

          _buildSectionHeader('Next Level Móvil', const Color(0xFF1B3470)),
          _buildListTile(
            context,
            Icons.info_outline,
            'Versión',
            const Color(0xFF1B3470),
            null,
            trailingText: '1.0.0',
          ),

          const SizedBox(height: 20),

          Padding(
            padding: const EdgeInsets.symmetric(horizontal: 16.0),
            child: InkWell(
              onTap: () {
                ScaffoldMessenger.of(context).showSnackBar(
                  const SnackBar(
                    content: Text(
                      '¡Gracias por tu interés! Pronto en la Store.',
                    ),
                  ),
                );
              },
              child: const Text(
                'Si te gusta la aplicación, por favor deja una reseña',
                style: TextStyle(
                  color: Colors.black54,
                  fontSize: 14,
                  decoration: TextDecoration.underline,
                ),
              ),
            ),
          ),

          const SizedBox(height: 40),

          ListTile(
            onTap: () => _mostrarDialogoCerrarSesion(context),
            title: const Text(
              'Cerrar sesión',
              style: TextStyle(
                color: Colors.redAccent,
                fontWeight: FontWeight.bold,
                fontSize: 18,
              ),
            ),
            trailing: const Icon(Icons.logout, color: Colors.redAccent),
          ),
        ],
      ),
    );
  }

  Widget _buildSectionHeader(
    String title, [
    Color color = const Color(0xFF1A4693),
  ]) {
    return Padding(
      padding: const EdgeInsets.fromLTRB(16, 24, 16, 8),
      child: Text(
        title,
        style: TextStyle(
          color: color,
          fontWeight: FontWeight.bold,
          fontSize: 14,
          letterSpacing: 1.1,
        ),
      ),
    );
  }

  Widget _buildListTile(
    BuildContext context,
    IconData icon,
    String title,
    Color iconColor,
    VoidCallback? onTap, {
    String? trailingText,
  }) {
    return ListTile(
      leading: Icon(icon, color: iconColor),
      title: Text(
        title,
        style: const TextStyle(
          fontSize: 16,
          color: Colors.black87,
          fontWeight: FontWeight.w500,
        ),
      ),
      trailing: trailingText != null
          ? Text(trailingText, style: const TextStyle(color: Colors.grey))
          : const Icon(Icons.arrow_forward_ios, size: 16, color: Colors.grey),
      onTap: onTap,
    );
  }

  void _mostrarDialogoCerrarSesion(BuildContext context) {
    showDialog(
      context: context,
      builder: (context) {
        return AlertDialog(
          shape: RoundedRectangleBorder(
            borderRadius: BorderRadius.circular(15),
          ),
          title: const Text('Cerrar sesión'),
          content: const Text(
            '¿Estás seguro de que deseas salir de tu cuenta?',
          ),
          actions: [
            TextButton(
              onPressed: () => Navigator.of(context).pop(),
              child: const Text(
                'Cancelar',
                style: TextStyle(color: Colors.grey),
              ),
            ),
            TextButton(
              onPressed: () {
                Navigator.pushAndRemoveUntil(
                  context,
                  MaterialPageRoute(
                    builder: (context) => const PantallaLogin(),
                  ),
                  (route) => false,
                );
              },
              child: const Text(
                'Sí, salir',
                style: TextStyle(
                  color: Colors.red,
                  fontWeight: FontWeight.bold,
                ),
              ),
            ),
          ],
        );
      },
    );
  }
}
