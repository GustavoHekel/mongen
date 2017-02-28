<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePaises extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sistema.paises', function (Blueprint $table) {
            $table->increments('id_pais');
            $table->string('nombre' , 255);
            // $table->timestamps();
        });

        DB::table('sistema.paises')->insert([
            ['id_pais' => 1, 'nombre' => 'Australia'],
            ['id_pais' => 2, 'nombre' => 'Austria'],
            ['id_pais' => 3, 'nombre' => 'Azerbaiyán'],
            ['id_pais' => 4, 'nombre' => 'Anguilla'],
            ['id_pais' => 5, 'nombre' => 'Argentina'],
            ['id_pais' => 6, 'nombre' => 'Armenia'],
            ['id_pais' => 7, 'nombre' => 'Bielorrusia'],
            ['id_pais' => 8, 'nombre' => 'Belice'],
            ['id_pais' => 9, 'nombre' => 'Bélgica'],
            ['id_pais' => 10, 'nombre' => 'Bermudas'],
            ['id_pais' => 11, 'nombre' => 'Bulgaria'],
            ['id_pais' => 12, 'nombre' => 'Brasil'],
            ['id_pais' => 13, 'nombre' => 'Reino Unido'],
            ['id_pais' => 14, 'nombre' => 'Hungría'],
            ['id_pais' => 15, 'nombre' => 'Vietnam'],
            ['id_pais' => 16, 'nombre' => 'Haiti'],
            ['id_pais' => 17, 'nombre' => 'Guadalupe'],
            ['id_pais' => 18, 'nombre' => 'Alemania'],
            ['id_pais' => 19, 'nombre' => 'Países Bajos, Holanda'],
            ['id_pais' => 20, 'nombre' => 'Grecia'],
            ['id_pais' => 21, 'nombre' => 'Georgia'],
            ['id_pais' => 22, 'nombre' => 'Dinamarca'],
            ['id_pais' => 23, 'nombre' => 'Egipto'],
            ['id_pais' => 24, 'nombre' => 'Israel'],
            ['id_pais' => 25, 'nombre' => 'India'],
            ['id_pais' => 26, 'nombre' => 'Irán'],
            ['id_pais' => 27, 'nombre' => 'Irlanda'],
            ['id_pais' => 28, 'nombre' => 'España'],
            ['id_pais' => 29, 'nombre' => 'Italia'],
            ['id_pais' => 30, 'nombre' => 'Kazajstán'],
            ['id_pais' => 31, 'nombre' => 'Camerún'],
            ['id_pais' => 32, 'nombre' => 'Canadá'],
            ['id_pais' => 33, 'nombre' => 'Chipre'],
            ['id_pais' => 34, 'nombre' => 'Kirguistán'],
            ['id_pais' => 35, 'nombre' => 'China'],
            ['id_pais' => 36, 'nombre' => 'Costa Rica'],
            ['id_pais' => 37, 'nombre' => 'Kuwait'],
            ['id_pais' => 38, 'nombre' => 'Letonia'],
            ['id_pais' => 39, 'nombre' => 'Libia'],
            ['id_pais' => 40, 'nombre' => 'Lituania'],
            ['id_pais' => 41, 'nombre' => 'Luxemburgo'],
            ['id_pais' => 42, 'nombre' => 'México'],
            ['id_pais' => 43, 'nombre' => 'Moldavia'],
            ['id_pais' => 44, 'nombre' => 'Mónaco'],
            ['id_pais' => 45, 'nombre' => 'Nueva Zelanda'],
            ['id_pais' => 46, 'nombre' => 'Noruega'],
            ['id_pais' => 47, 'nombre' => 'Polonia'],
            ['id_pais' => 48, 'nombre' => 'Portugal'],
            ['id_pais' => 49, 'nombre' => 'Reunión'],
            ['id_pais' => 50, 'nombre' => 'Rusia'],
            ['id_pais' => 51, 'nombre' => 'El Salvador'],
            ['id_pais' => 52, 'nombre' => 'Eslovaquia'],
            ['id_pais' => 53, 'nombre' => 'Eslovenia'],
            ['id_pais' => 54, 'nombre' => 'Surinam'],
            ['id_pais' => 55, 'nombre' => 'Estados Unidos'],
            ['id_pais' => 56, 'nombre' => 'Tadjikistan'],
            ['id_pais' => 57, 'nombre' => 'Turkmenistan'],
            ['id_pais' => 58, 'nombre' => 'Islas Turcas y Caicos'],
            ['id_pais' => 59, 'nombre' => 'Turquía'],
            ['id_pais' => 60, 'nombre' => 'Uganda'],
            ['id_pais' => 61, 'nombre' => 'Uzbekistán'],
            ['id_pais' => 62, 'nombre' => 'Ucrania'],
            ['id_pais' => 63, 'nombre' => 'Finlandia'],
            ['id_pais' => 64, 'nombre' => 'Francia'],
            ['id_pais' => 65, 'nombre' => 'República Checa'],
            ['id_pais' => 66, 'nombre' => 'Suiza'],
            ['id_pais' => 67, 'nombre' => 'Suecia'],
            ['id_pais' => 68, 'nombre' => 'Estonia'],
            ['id_pais' => 69, 'nombre' => 'Corea del Sur'],
            ['id_pais' => 70, 'nombre' => 'Japón'],
            ['id_pais' => 71, 'nombre' => 'Croacia'],
            ['id_pais' => 72, 'nombre' => 'Rumanía'],
            ['id_pais' => 73, 'nombre' => 'Hong Kong'],
            ['id_pais' => 74, 'nombre' => 'Indonesia'],
            ['id_pais' => 75, 'nombre' => 'Jordania'],
            ['id_pais' => 76, 'nombre' => 'Malasia'],
            ['id_pais' => 77, 'nombre' => 'Singapur'],
            ['id_pais' => 78, 'nombre' => 'Taiwan'],
            ['id_pais' => 79, 'nombre' => 'Bosnia y Herzegovina'],
            ['id_pais' => 80, 'nombre' => 'Bahamas'],
            ['id_pais' => 81, 'nombre' => 'Chile'],
            ['id_pais' => 82, 'nombre' => 'Colombia'],
            ['id_pais' => 83, 'nombre' => 'Islandia'],
            ['id_pais' => 84, 'nombre' => 'Corea del Norte'],
            ['id_pais' => 85, 'nombre' => 'Macedonia'],
            ['id_pais' => 86, 'nombre' => 'Malta'],
            ['id_pais' => 87, 'nombre' => 'Pakistán'],
            ['id_pais' => 88, 'nombre' => 'Papúa-Nueva Guinea'],
            ['id_pais' => 89, 'nombre' => 'Perú'],
            ['id_pais' => 90, 'nombre' => 'Filipinas'],
            ['id_pais' => 91, 'nombre' => 'Arabia Saudita'],
            ['id_pais' => 92, 'nombre' => 'Tailandia'],
            ['id_pais' => 93, 'nombre' => 'Emiratos árabes Unidos'],
            ['id_pais' => 94, 'nombre' => 'Groenlandia'],
            ['id_pais' => 95, 'nombre' => 'Venezuela'],
            ['id_pais' => 96, 'nombre' => 'Zimbabwe'],
            ['id_pais' => 97, 'nombre' => 'Kenia'],
            ['id_pais' => 98, 'nombre' => 'Algeria'],
            ['id_pais' => 99, 'nombre' => 'Líbano'],
            ['id_pais' => 100, 'nombre' => 'Botsuana'],
            ['id_pais' => 101, 'nombre' => 'Tanzania'],
            ['id_pais' => 102, 'nombre' => 'Namibia'],
            ['id_pais' => 103, 'nombre' => 'Ecuador'],
            ['id_pais' => 104, 'nombre' => 'Marruecos'],
            ['id_pais' => 105, 'nombre' => 'Ghana'],
            ['id_pais' => 106, 'nombre' => 'Siria'],
            ['id_pais' => 107, 'nombre' => 'Nepal'],
            ['id_pais' => 108, 'nombre' => 'Mauritania'],
            ['id_pais' => 109, 'nombre' => 'Seychelles'],
            ['id_pais' => 110, 'nombre' => 'Paraguay'],
            ['id_pais' => 111, 'nombre' => 'Uruguay'],
            ['id_pais' => 112, 'nombre' => 'Congo - Brazzaville'],
            ['id_pais' => 113, 'nombre' => 'Cuba'],
            ['id_pais' => 114, 'nombre' => 'Albania'],
            ['id_pais' => 115, 'nombre' => 'Nigeria'],
            ['id_pais' => 116, 'nombre' => 'Zambia'],
            ['id_pais' => 117, 'nombre' => 'Mozambique'],
            ['id_pais' => 119, 'nombre' => 'Angola'],
            ['id_pais' => 120, 'nombre' => 'Sri Lanka'],
            ['id_pais' => 121, 'nombre' => 'Etiopía'],
            ['id_pais' => 122, 'nombre' => 'Túnez'],
            ['id_pais' => 123, 'nombre' => 'Bolivia'],
            ['id_pais' => 124, 'nombre' => 'Panamá'],
            ['id_pais' => 125, 'nombre' => 'Malawi'],
            ['id_pais' => 126, 'nombre' => 'Liechtenstein'],
            ['id_pais' => 127, 'nombre' => 'Bahrein'],
            ['id_pais' => 128, 'nombre' => 'Barbados'],
            ['id_pais' => 130, 'nombre' => 'Chad'],
            ['id_pais' => 131, 'nombre' => 'Man, Isla de'],
            ['id_pais' => 132, 'nombre' => 'Jamaica'],
            ['id_pais' => 133, 'nombre' => 'Malí'],
            ['id_pais' => 134, 'nombre' => 'Madagascar'],
            ['id_pais' => 135, 'nombre' => 'Senegal'],
            ['id_pais' => 136, 'nombre' => 'Togo'],
            ['id_pais' => 137, 'nombre' => 'Honduras'],
            ['id_pais' => 138, 'nombre' => 'República Dominicana'],
            ['id_pais' => 139, 'nombre' => 'Mongolia'],
            ['id_pais' => 140, 'nombre' => 'Irak'],
            ['id_pais' => 141, 'nombre' => 'Sudáfrica'],
            ['id_pais' => 142, 'nombre' => 'Aruba'],
            ['id_pais' => 143, 'nombre' => 'Gibraltar'],
            ['id_pais' => 144, 'nombre' => 'Afganistán'],
            ['id_pais' => 145, 'nombre' => 'Andorra'],
            ['id_pais' => 147, 'nombre' => 'Antigua y Barbuda'],
            ['id_pais' => 149, 'nombre' => 'Bangladesh'],
            ['id_pais' => 151, 'nombre' => 'Benín'],
            ['id_pais' => 152, 'nombre' => 'Bután'],
            ['id_pais' => 154, 'nombre' => 'Islas Virgenes Británicas'],
            ['id_pais' => 155, 'nombre' => 'Brunéi'],
            ['id_pais' => 156, 'nombre' => 'Burkina Faso'],
            ['id_pais' => 157, 'nombre' => 'Burundi'],
            ['id_pais' => 158, 'nombre' => 'Camboya'],
            ['id_pais' => 159, 'nombre' => 'Cabo Verde'],
            ['id_pais' => 164, 'nombre' => 'Comores'],
            ['id_pais' => 165, 'nombre' => 'Congo - Kinshasa'],
            ['id_pais' => 166, 'nombre' => 'Cook, Islas'],
            ['id_pais' => 168, 'nombre' => 'Costa de Marfil'],
            ['id_pais' => 169, 'nombre' => 'Djibouti, Yibuti'],
            ['id_pais' => 171, 'nombre' => 'Timor Oriental'],
            ['id_pais' => 172, 'nombre' => 'Guinea Ecuatorial'],
            ['id_pais' => 173, 'nombre' => 'Eritrea'],
            ['id_pais' => 175, 'nombre' => 'Feroe, Islas'],
            ['id_pais' => 176, 'nombre' => 'Fiyi'],
            ['id_pais' => 178, 'nombre' => 'Polinesia Francesa'],
            ['id_pais' => 180, 'nombre' => 'Gabón'],
            ['id_pais' => 181, 'nombre' => 'Gambia'],
            ['id_pais' => 184, 'nombre' => 'Granada'],
            ['id_pais' => 185, 'nombre' => 'Guatemala'],
            ['id_pais' => 186, 'nombre' => 'Guernsey'],
            ['id_pais' => 187, 'nombre' => 'Guinea'],
            ['id_pais' => 188, 'nombre' => 'Guinea-Bissau'],
            ['id_pais' => 189, 'nombre' => 'Guyana'],
            ['id_pais' => 193, 'nombre' => 'Jersey'],
            ['id_pais' => 195, 'nombre' => 'Kiribati'],
            ['id_pais' => 196, 'nombre' => 'Laos'],
            ['id_pais' => 197, 'nombre' => 'Lesotho'],
            ['id_pais' => 198, 'nombre' => 'Liberia'],
            ['id_pais' => 200, 'nombre' => 'Maldivas'],
            ['id_pais' => 201, 'nombre' => 'Martinica'],
            ['id_pais' => 202, 'nombre' => 'Mauricio'],
            ['id_pais' => 205, 'nombre' => 'Myanmar'],
            ['id_pais' => 206, 'nombre' => 'Nauru'],
            ['id_pais' => 207, 'nombre' => 'Antillas Holandesas'],
            ['id_pais' => 208, 'nombre' => 'Nueva Caledonia'],
            ['id_pais' => 209, 'nombre' => 'Nicaragua'],
            ['id_pais' => 210, 'nombre' => 'Níger'],
            ['id_pais' => 212, 'nombre' => 'Norfolk Island'],
            ['id_pais' => 213, 'nombre' => 'Omán'],
            ['id_pais' => 215, 'nombre' => 'Isla Pitcairn'],
            ['id_pais' => 216, 'nombre' => 'Qatar'],
            ['id_pais' => 217, 'nombre' => 'Ruanda'],
            ['id_pais' => 218, 'nombre' => 'Santa Elena'],
            ['id_pais' => 219, 'nombre' => 'San Cristobal y Nevis'],
            ['id_pais' => 220, 'nombre' => 'Santa Lucía'],
            ['id_pais' => 221, 'nombre' => 'San Pedro y Miquelón'],
            ['id_pais' => 222, 'nombre' => 'San Vincente y Granadinas'],
            ['id_pais' => 223, 'nombre' => 'Samoa'],
            ['id_pais' => 224, 'nombre' => 'San Marino'],
            ['id_pais' => 225, 'nombre' => 'San Tomé y Príncipe'],
            ['id_pais' => 226, 'nombre' => 'Serbia y Montenegro'],
            ['id_pais' => 227, 'nombre' => 'Sierra Leona'],
            ['id_pais' => 228, 'nombre' => 'Islas Salomón'],
            ['id_pais' => 229, 'nombre' => 'Somalia'],
            ['id_pais' => 232, 'nombre' => 'Sudán'],
            ['id_pais' => 234, 'nombre' => 'Swazilandia'],
            ['id_pais' => 235, 'nombre' => 'Tokelau'],
            ['id_pais' => 236, 'nombre' => 'Tonga'],
            ['id_pais' => 237, 'nombre' => 'Trinidad y Tobago'],
            ['id_pais' => 239, 'nombre' => 'Tuvalu'],
            ['id_pais' => 240, 'nombre' => 'Vanuatu'],
            ['id_pais' => 241, 'nombre' => 'Wallis y Futuna'],
            ['id_pais' => 242, 'nombre' => 'Sáhara Occidental'],
            ['id_pais' => 243, 'nombre' => 'Yemen'],
            ['id_pais' => 246, 'nombre' => 'Puerto Rico']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('sistema.paises');
    }
}
