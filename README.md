# API para codigos postales de méxico

El propocito de esta API es devolver los datos de determinado código postal. Para hacer uso de ella ingresa a https://arcane-ocean-22887.herokuapp.com,  allí deberás proporcionar el codigo postal para realizar la búsqueda de la siguiente forma:

https://arcane-ocean-22887.herokuapp.com/api/96580/isfrom

Esto te devolverá un JSON con la siguiente información:

{
  "codigo_postal": "96580",
  "ciudad": "Coatzacoalcos",
  "estado": "Veracruz de Ignacio de la Llave",
  "colonias": [
    "Benito Juárez Sur",
    "Tierra y Libertad"
  ]
}

De momento solo se encuentran los datos de los siguientes estados:

*Veracruz

Posteriormente se agregaran más datos.

La estructura de la API esta diseñada para agregar codigos postales de otros paises, en caso de desear colaborar escribeme a davo-sanchez@outlook.com
