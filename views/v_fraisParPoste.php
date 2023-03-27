<h3> Cumul pour tout les visiteur des frais au forfait par poste :</h3>
<h4>Nombre lignes :  <?php echo $nbLigne[0]?></h4>
    <div class="encadre">
  	<table class="listeLegere">
             <tr>
                <th class="libelle">Repas midi </th>
                <th class="libelle">Nuitée</th>
                <th class='libelle'>Etape</th>     
                <th class='libelle'>KM</th>             
             </tr>
        <?php      
          foreach ( $lesFraisForfait as $unFraisForfait ) 
		  { if($unFraisForfait['idFraisForfait']==  'REP')
        { $rep=$unFraisForfait['total'];}

        if($unFraisForfait['idFraisForfait']==  'NUI')
        { $nui=$unFraisForfait['total'];}

        if($unFraisForfait['idFraisForfait']==  'ETP')
        { $etp=$unFraisForfait['total'];}

        if($unFraisForfait['idFraisForfait']==  'KM')
        { $km=$unFraisForfait['total'];}
      }
		?>
             <tr>
                <td><?php echo $rep?></td>
                <td><?php echo $nui ?></td>
                <td><?php echo $etp ?></td>
                <td><?php echo $km ?></td>
             </tr>
        <?php 
      
		?>

    
    </table>
  </div>