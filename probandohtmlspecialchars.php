<?php

$text = '<Las "comillas dobles" son importantes y las \'comillas simples\' también son importantes>';

// Usando ENT_COMPAT
echo htmlspecialchars($text, ENT_COMPAT) . "<br>";
// Salida: &lt;Las "comillas dobles" son importantes y las 'comillas simples' también son importantes&gt;

// Sin especificar el segundo argumento (valor predeterminado, equivalente a ENT_COMPAT)
echo htmlspecialchars($text) . "<br>";
// Salida: &lt;Las "comillas dobles" son importantes y las 'comillas simples' también son importantes&gt;

// Usando ENT_QUOTES para convertir tanto las comillas dobles como las comillas simples
echo htmlspecialchars($text, ENT_QUOTES) . "<br>";
// Salida: &lt;Las &quot;comillas dobles&quot; son importantes y las &#039;comillas simples&#039; también son importantes&gt;

?>