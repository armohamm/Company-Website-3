<?php

// Elikkäs teet reference-title.html sivulle tässä koodin mikä näyttää sen siinä. Vois tehdä kaksi funktiota. toinen tekee sen html osuuden ja toinen sitten kirjoittaa javascriptiä. 
// Reference-contents.html tiedostoon tulee kolme funktiota mutta sitä katotaan myöhemmin.
// helpoin tapa tehdä tämä on hakea ensin otsikoiden määrä count(*) funktiolla. Ja sitte for loopilla. positionin mukaan näytät siinä sitten. 
// Laitat sinne vaan ihan puhdasta html koodia ja väliin tietysti se $jokuArrayEmt[0][1];



// <li referencetitle-id="1" class="bg-gray-100 border-bottom-info ui-state-default">Referenssiotsikko 1 <br> 
//     <a href="edit-reference-title.php?type=edit&id=1" style="color: rgb(230, 149, 0);">Muokkaa</a>
//     <a href="edit-reference-title.php?type=delete&id=1" style="color: red;"> Poista</a>
// </li>