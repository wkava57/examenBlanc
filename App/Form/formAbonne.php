<?php

namespace App\Form;

use App\Service\Form;
use App\Model\modelAbonne;


class FormAbonne
{
    public static function buildAddAbonne()
    {
        $form = new Form();

        $form->debutForm('post', URL_ROOT . 'admin/abonne/add')
            ->ajoutLabelFor('number', 'id :')
            ->ajoutInput('number', 'id', ['id' => 'abonne', 'class' => 'form-control'])
            ->ajoutLabelFor('text', 'prenom')
            ->ajoutInput('text', 'prenom', ['prenom' => 'abonne', 'class' => 'form-control'])
            ->ajoutLabelFor('text', 'nom')
            ->ajoutInput('text', 'nom', ['nom' => 'abonne', 'class' => 'form-control'])
            ->ajoutBouton('Ajouter un abonné', ['class' => 'btn btn-primary'])
            ->finForm();
        return $form;
    }

    public static function buildUpdateAbonne(Abonne $abonne)
    {
        $form = new Form();

        $form->debutForm('post', URL_ROOT . 'update/' . $abonne->getIdAbonne())
            ->ajoutLabelFor('number', 'id :')
            ->ajoutInput('number', 'id', ['id' => 'abonne', 'class' => 'form-control'])
            ->ajoutLabelFor('text', 'prenom :')
            ->ajoutInput('text', 'prenom', ['prenom' => 'abonne', 'class' => 'form-control'])
            ->ajoutLabelFor('text', 'nom :')
            ->ajoutInput('text', 'nom', ['nom' => 'abonne', 'class' => 'form-control'])
            ->ajoutBouton('Mettre à jour un abonné', ['class' => 'btn btn-primary'])
            ->finForm();
        return $form;
    }

    public static function buildDeleteAbonne($abonne)
    {
        $form = new Form();

        $form->debutForm('post', URL_ROOT . 'Delete/' . $abonne->getIdAbonne())
            ->ajoutLabelFor('number', 'id :')
            ->ajoutInput('number', 'id', ['id' => 'abonne', 'class' => 'form-control'])
            ->ajoutLabelFor('text', 'prenom')
            ->ajoutInput('text', 'prenom', ['prenom' => 'abonne', 'class' => 'form-control'])
            ->ajoutLabelFor('text', 'nom')
            ->ajoutInput('text', 'nom', ['nom' => 'abonne', 'class' => 'form-control'])
            ->ajoutBouton('Supprimer un abonné', ['class' => 'btn btn-primary'])
            ->finForm();
        return $form;
    }
}