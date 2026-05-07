import 'package:flutter/material.dart';
import 'package:flutter/services.dart';

class PantallaCronograma extends StatelessWidget {
  const PantallaCronograma({super.key});

  @override
  Widget build(BuildContext context) {
    const String codigoPago = "T16242882612";

    return Scaffold(
      backgroundColor: const Color(0xFFF4F7FA),
      appBar: AppBar(
        elevation: 0,
        backgroundColor: const Color(0xFF1A4693),
        title: const Text(
          'Cronograma de Pagos',
          style: TextStyle(color: Colors.white, fontWeight: FontWeight.bold),
        ),
        leading: IconButton(
          icon: const Icon(Icons.arrow_back, color: Colors.white),
          onPressed: () => Navigator.of(context).pop(),
        ),
        actions: [
          IconButton(
            icon: const Icon(Icons.help_outline, color: Colors.white),
            onPressed: () {},
          ),
        ],
      ),
      body: SingleChildScrollView(
        physics: const BouncingScrollPhysics(),
        child: Column(
          children: [
            _buildTopStatusPanel(),
            _buildPaymentCodeCard(context, codigoPago),
            _buildBankSelector(),

            Padding(
              padding: const EdgeInsets.symmetric(horizontal: 16, vertical: 10),
              child: Column(
                crossAxisAlignment: CrossAxisAlignment.start,
                children: [
                  const Text(
                    "HISTORIAL Y PRÓXIMOS PAGOS",
                    style: TextStyle(
                      fontSize: 12,
                      fontWeight: FontWeight.bold,
                      color: Colors.grey,
                      letterSpacing: 1.2,
                    ),
                  ),

                  const SizedBox(height: 15),
                  _buildCuotaItem(
                    "Matrícula Escolar 2026",
                    "Cancelada",
                    "S/. 250.00",
                    Colors.green,
                    "01/03",
                    tipo: "MATRÍCULA",
                  ),
                  _buildCuotaItem(
                    "Paquete de Libros / Materiales",
                    "Cancelada",
                    "S/. 180.00",
                    Colors.green,
                    "03/03",
                    tipo: "LIBRO",
                  ),

                  _buildCuotaItem(
                    "Mensualidad Marzo",
                    "Cancelada",
                    "S/. 148.80",
                    Colors.green,
                    "05/03",
                  ),
                  _buildCuotaItem(
                    "Mensualidad Abril",
                    "Cancelada",
                    "S/. 148.80",
                    Colors.green,
                    "05/04",
                  ),
                  _buildCuotaItem(
                    "Mensualidad Mayo",
                    "Pendiente",
                    "S/. 148.80",
                    Colors.orange,
                    "05/05",
                  ),
                  _buildCuotaItem(
                    "Mensualidad Junio",
                    "Pendiente",
                    "S/. 148.80",
                    Colors.orange,
                    "05/06",
                  ),
                  _buildCuotaItem(
                    "Mensualidad Julio",
                    "Pendiente",
                    "S/. 148.80",
                    Colors.grey,
                    "05/07",
                  ),
                ],
              ),
            ),
          ],
        ),
      ),
    );
  }

  Widget _buildTopStatusPanel() {
    return Container(
      width: double.infinity,
      padding: const EdgeInsets.all(20),
      decoration: const BoxDecoration(
        color: Color(0xFF1A4693),
        borderRadius: BorderRadius.only(
          bottomLeft: Radius.circular(30),
          bottomRight: Radius.circular(30),
        ),
      ),
      child: const Row(
        mainAxisAlignment: MainAxisAlignment.spaceBetween,
        children: [
          Column(
            crossAxisAlignment: CrossAxisAlignment.start,
            children: [
              Text(
                "PERIODO ACADÉMICO",
                style: TextStyle(color: Colors.white70, fontSize: 12),
              ),
              Text(
                "2026",
                style: TextStyle(
                  color: Colors.white,
                  fontSize: 20,
                  fontWeight: FontWeight.bold,
                ),
              ),
              SizedBox(height: 5),
              Text(
                "Estado: Deuda Pendiente",
                style: TextStyle(
                  color: Colors.orangeAccent,
                  fontWeight: FontWeight.w500,
                ),
              ),
            ],
          ),
          Column(
            crossAxisAlignment: CrossAxisAlignment.end,
            children: [
              Text(
                "DEUDA PENDIENTE",
                style: TextStyle(color: Colors.white70, fontSize: 12),
              ),
              Text(
                "S/. 1,190.40",
                style: TextStyle(
                  color: Colors.white,
                  fontSize: 22,
                  fontWeight: FontWeight.bold,
                ),
              ),
            ],
          ),
        ],
      ),
    );
  }

  Widget _buildPaymentCodeCard(BuildContext context, String codigo) {
    return Container(
      margin: const EdgeInsets.all(16),
      padding: const EdgeInsets.all(20),
      decoration: BoxDecoration(
        color: Colors.white,
        borderRadius: BorderRadius.circular(20),
        boxShadow: [
          BoxShadow(
            color: Colors.black.withValues(alpha: 0.05), // CORREGIDO
            blurRadius: 10,
            offset: const Offset(0, 4),
          ),
        ],
      ),
      child: Column(
        children: [
          const Text(
            "CÓDIGO DE PAGO",
            style: TextStyle(
              color: Colors.grey,
              fontSize: 13,
              fontWeight: FontWeight.bold,
            ),
          ),
          const SizedBox(height: 10),
          Row(
            mainAxisAlignment: MainAxisAlignment.center,
            children: [
              Text(
                codigo,
                style: const TextStyle(
                  fontSize: 24,
                  color: Color(0xFF1A4693),
                  fontWeight: FontWeight.bold,
                  letterSpacing: 1.5,
                ),
              ),
              IconButton(
                icon: const Icon(Icons.copy_rounded, color: Color(0xFF4A90E2)),
                onPressed: () {
                  Clipboard.setData(ClipboardData(text: codigo));
                  ScaffoldMessenger.of(context).showSnackBar(
                    const SnackBar(content: Text("Código copiado")),
                  );
                },
              ),
            ],
          ),
        ],
      ),
    );
  }

  Widget _buildBankSelector() {
    return ListTile(
      leading: const Icon(Icons.account_balance, color: Color(0xFF1A4693)),
      title: const Text(
        "Banco e instrucciones de pago",
        style: TextStyle(fontWeight: FontWeight.bold),
      ),
      subtitle: const Text("Toca para ver agencias autorizadas"),
      trailing: const Icon(Icons.chevron_right, color: Colors.grey),
      onTap: () {},
    );
  }

  Widget _buildCuotaItem(
    String titulo,
    String estado,
    String monto,
    Color colorEstado,
    String fecha, {
    String tipo = "MES",
  }) {
    return Container(
      margin: const EdgeInsets.only(bottom: 12),
      padding: const EdgeInsets.all(15),
      decoration: BoxDecoration(
        color: Colors.white,
        borderRadius: BorderRadius.circular(15),
        border: Border.all(
          color: Colors.grey.withValues(alpha: 0.1),
        ), // CORREGIDO
      ),
      child: Row(
        children: [
          Container(
            padding: const EdgeInsets.symmetric(horizontal: 8, vertical: 6),
            width: 65,
            decoration: BoxDecoration(
              color: const Color(0xFFE8F0FE),
              borderRadius: BorderRadius.circular(10),
            ),
            child: Column(
              children: [
                Text(
                  tipo,
                  maxLines: 1,
                  overflow: TextOverflow.ellipsis,
                  style: const TextStyle(
                    fontSize: 6.5,
                    fontWeight: FontWeight.bold,
                    color: Color(0xFF1A4693),
                  ),
                ),
                Text(
                  fecha.split('/')[0],
                  style: const TextStyle(
                    fontSize: 16,
                    fontWeight: FontWeight.bold,
                    color: Color(0xFF1A4693),
                  ),
                ),
              ],
            ),
          ),
          const SizedBox(width: 15),
          Expanded(
            child: Column(
              crossAxisAlignment: CrossAxisAlignment.start,
              children: [
                Text(
                  titulo,
                  style: const TextStyle(
                    fontWeight: FontWeight.bold,
                    fontSize: 14,
                  ),
                ),
                Text(
                  "Vence: $fecha",
                  style: const TextStyle(color: Colors.grey, fontSize: 12),
                ),
              ],
            ),
          ),
          Column(
            crossAxisAlignment: CrossAxisAlignment.end,
            children: [
              Text(
                monto,
                style: TextStyle(
                  color: colorEstado,
                  fontWeight: FontWeight.bold,
                  fontSize: 15,
                ),
              ),
              Text(
                estado,
                style: TextStyle(
                  color: colorEstado.withValues(alpha: 0.8), // CORREGIDO
                  fontSize: 10,
                  fontWeight: FontWeight.bold,
                ),
              ),
            ],
          ),
        ],
      ),
    );
  }
}
