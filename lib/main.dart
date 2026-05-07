import 'package:flutter/material.dart';

// IMPORTACIONES DE TUS VISTAS
import 'vistas/pantalla_login.dart';
import 'vistas/home_page.dart';
import 'vistas/pantalla_cursos.dart';
import 'vistas/pantalla_perfil.dart';
import 'vistas/pantalla_asistencia.dart';
import 'vistas/pantalla_cronograma.dart';
import 'vistas/pantalla_ranking.dart';
import 'vistas/pantalla_recuperar_clave.dart';
import 'vistas/pantalla_cuenta.dart'; // Para las rutas genéricas

void main() {
  runApp(const MyApp());
}

class MyApp extends StatelessWidget {
  const MyApp({super.key});

  @override
  Widget build(BuildContext context) {
    return MaterialApp(
      debugShowCheckedModeBanner: false,
      title: 'NEXT LEVEL APP',
      theme: ThemeData(
        primaryColor: const Color(0xFF0D1B3E),
        appBarTheme: const AppBarTheme(
          backgroundColor: Color(0xFF0D1B3E),
          foregroundColor: Colors.white,
          elevation: 0,
        ),
      ),

      // 1. CAMBIAMOS la ruta inicial al Login
      initialRoute: '/',

      routes: {
        // 2. Definimos '/' como el Login
        '/': (context) => const PantallaLogin(),

        // 3. Movemos el Home a su propia ruta
        '/home': (context) => const HomePage(),

        '/cursos': (context) => const PantallaCursos(),
        '/perfil': (context) => const PantallaPerfil(),
        '/asistencia': (context) => const PantallaAsistencia(),
        '/cronograma': (context) => const PantallaCronograma(),
        '/ranking': (context) => const PantallaRanking(),
        '/cuenta': (context) => const PantallaCuenta(),

        // RUTAS GENÉRICAS
        '/imprimir': (context) =>
            const PantallaGenerica(titulo: 'Imprimir Fotocheck'),
        '/horario': (context) =>
            const PantallaGenerica(titulo: 'Horario Académico'),
        '/recuperar': (context) => const PantallaRecuperarClave(),
        '/intranet': (context) =>
            const PantallaGenerica(titulo: 'Redirigiendo a Intranet...'),
        '/auxiliar': (context) =>
            const PantallaGenerica(titulo: 'Acceso Auxiliar'),
        '/apoderado': (context) =>
            const PantallaGenerica(titulo: 'Acceso Apoderado'),
      },
    );
  }
}

// Mantenemos tu PantallaGenerica tal cual la tienes
class PantallaGenerica extends StatelessWidget {
  final String titulo;
  const PantallaGenerica({super.key, required this.titulo});

  @override
  Widget build(BuildContext context) {
    return Scaffold(
      appBar: AppBar(
        title: Text(titulo),
        actions: [
          Padding(
            padding: const EdgeInsets.only(right: 15),
            child: Image.asset(
              'assets/logo_next_level.png',
              width: 40,
              height: 40,
              fit: BoxFit.contain,
              errorBuilder: (context, error, stackTrace) =>
                  const Icon(Icons.rocket_launch, color: Colors.blue),
            ),
          ),
        ],
      ),
      body: Center(
        child: Column(
          mainAxisAlignment: MainAxisAlignment.center,
          children: [
            const CircularProgressIndicator(color: Color(0xFF0D1B3E)),
            const SizedBox(height: 20),
            Text('Cargando $titulo...', style: const TextStyle(fontSize: 16)),
          ],
        ),
      ),
    );
  }
}
