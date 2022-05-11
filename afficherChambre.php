<?php
include 'headerBack.php';
include '../Controller/ChambreController.php';
	$ChambreC=new ChambreController();
	$listeChambre=$ChambreC->afficherChambres(); 
?>





				<?php
				foreach($listeChambre as $Chambre){
			?>
                  <tr>
                  <td><?php echo $Chambre['num']; ?></td>
                    <td class="tm-product-name"><?php echo $Chambre['vue']; ?></td>
                    <td><?php echo $Chambre['Type']; ?></td>
                    <td><?php echo $Chambre['etage']; ?></td>
                    
                   
                    
                    <td>
					<form method="POST" action="modifierChambre.php?num=<?php echo $Chambre['num']; ?>">
						<input vue="submit" name="Modifier" value="Modifier" class="btn btn-primary btn-block text-uppercase sm-1">
						<input vue="hnumden" value=<?PHP echo $Chambre['num']; ?> name="num">
					</form>
				     </td>

                <td>
				<a href="afficherreponseparChambre.php?num=<?php echo $Chambre['num']; ?>"  class="tm-product-delete-link" >
				Afficher Reponses
			</a>
			
                    
                    </td>
				<td>
				<a href="supprimerChambre.php?num=<?php echo $Chambre['num']; ?>"  class="tm-product-delete-link" >
				<i class="far fa-trash-alt tm-product-delete-icon"></i>
			</a>
			
                    
                    </td>
                  </tr>
                  
				  <?php
				}
			?>
                  
                 
                 
                </tbody>
              </table>
            </div>
            <!-- table container -->
			<a
              href="ajouterChambre.php"
              class="btn btn-primary btn-block text-uppercase mb-3">Add new Chambre</a>

            

              	<a
              href="triASC.php"
              class="btn btn-primary btn-block text-uppercase mb-3">Tri par ordre ASC</a>
              	<a
              href="trnumESC.php"
              class="btn btn-primary btn-block text-uppercase mb-3">Tri par ordre DESC</a>


              




	
			</div>
		</div>
	</div>
  



