<?php

    class Estado
    {
        //Estados de los pedidos
        const PEND = 'pendiente';
        const PREPARACION = 'en preparacion';
        const LISTO = 'listo para servir';
        const ENTREGADO = 'entregado';
        
        //Estados de la mesa
        const ESPERANDO = 'con cliente esperando pedido';
        const COMIENDO = 'con cliente comiendo';
        const PAGANDO = 'con cliente pagando';
        const CERRADA = 'cerrada';

    }
?>