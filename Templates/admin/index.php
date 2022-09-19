<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Id abonné</th>
                        <th scope="col">Prenom</th>
                        <th scope="col">Nom</th>
                    </tr>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Id Association</th>
                        <th scope="col">Id abonné</th>
                        <th scope="col">Id Ouvrage</th>
                    </tr>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Id Ouvrage</th>
                        <th scope="col">Titre</th>
                        <th scope="col">Auteur</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($abonnes as $abonne) { ?>
                        <tr>
                            <th scope="row"><?= $abonne->getIdAbonne() ?></th>
                            <td><?= $abonne->getIdAbonne() ?></td>
                            <td><?= $abonne->getPrenom() ?></td>
                            <td><?= $abonne->getNom() ?></td>
                            <td><a href="<?= URL_ROOT . 'admin/abonne/' . $abonne->getIdAbonne() ?>" class="btn btn-primary">Valider</a></td>
                        </tr>
                        <tr></tr>
                    <?php } ?>
                    <?php foreach ($associations as $association) { ?>
                        <tr>
                        <th scope="row"><?= $association->getIdAssociation() ?></th>
                            <td><?= $association->getIdAssociation() ?></td>
                            <td><?= $association->getIdAbonne() ?></td>
                            <td><?= $association->getIdOuvrage() ?></td>
                            <td><a href="<?= URL_ROOT . 'admin/association/' . $article->getIdAssociation() ?>" class="btn btn-primary">Valider</a></td>
                        </tr>
                        <tr></tr>
                    <?php } ?>
                    <th scope="row"><?= $ouvrage->getIdOuvrage() ?></th>
                            <td><?= $association->getIdOuvrage() ?></td>
                            <td><?= $association->getTitre() ?></td>
                            <td><?= $association->getAuteur() ?></td>
                            <td><a href="<?= URL_ROOT . 'admin/ouvrage/' . $article->getIdOuvrage() ?>" class="btn btn-primary">Valider</a></td>
                    </th>
                </tbody>
            </table>
            <a href="<?= URL_ROOT . 'admin/abonne/add' ?>" class="btn btn-primary">Ajouter</a>
            <a href="<?= URL_ROOT . 'admin/association/add' ?>" class="btn btn-primary">Ajouter</a>
            <a href="<?= URL_ROOT . 'admin/ouvrage/add' ?>" class="btn btn-primary">Ajouter</a>
        </div>
    </div>
</div>




<tr>
                            
                        </tr>