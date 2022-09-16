<?php

namespace Src\Form;

use Src\Service\Form;
use Src\Model\modelOuvrage;


class FormOuvrage
{
    public static function buildAddOuvrage()
    {
        $form = new Form();

        $form->debutForm('post', URL_ROOT . 'admin/ouvrage/add')
            ->ajoutLabelFor('number', 'idOuvrage :')
            ->ajoutInput('number', 'id', ['id' => 'ouvrage', 'class' => 'form-control'])
            ->ajoutLabelFor('text', 'titre :')
            ->ajoutInput('text', 'titre', ['titre' => 'ouvrage', 'class' => 'form-control'])
            ->ajoutLabelFor('text', 'auteur :')
            ->ajoutInput('text', 'auteur', ['auteur' => 'ouvrage', 'class' => 'form-control'])
            ->ajoutBouton('Ajouter un ouvrage', ['class' => 'btn btn-primary'])
            ->finForm();
        return $form;
    }

    public static function buildUpdateAbonne(Abonne $abonne)
    {
        $form = new Form();

        $form->debutForm('post', URL_ROOT . 'update/' . $abonne->getIdAbonne())
        ->ajoutLabelFor('number', 'idOuvrage :')
        ->ajoutInput('number', 'id', ['id' => 'ouvrage', 'class' => 'form-control'])
        ->ajoutLabelFor('text', 'titre :')
        ->ajoutInput('text', 'titre', ['titre' => 'ouvrage', 'class' => 'form-control'])
        ->ajoutLabelFor('text', 'auteur :')
        ->ajoutInput('text', 'auteur', ['auteur' => 'ouvrage', 'class' => 'form-control'])
        ->ajoutBouton('Mettre à jour un ouvrage', ['class' => 'btn btn-primary'])
        ->finForm();
        return $form;
    }

    public static function buildDeleteAbonne($abonne)
    {
        $form = new Form();

        $form->debutForm('post', URL_ROOT . 'Delete/' . $abonne->getIdAbonne())
            ->ajoutLabelFor('number', 'idOuvrage :')
            ->ajoutInput('number', 'id', ['id' => 'ouvrage', 'class' => 'form-control'])
            ->ajoutLabelFor('text', 'titre :')
            ->ajoutInput('text', 'titre', ['titre' => 'ouvrage', 'class' => 'form-control'])
            ->ajoutLabelFor('text', 'auteur :')
            ->ajoutInput('text', 'auteur', ['auteur' => 'ouvrage', 'class' => 'form-control'])
            ->ajoutBouton('Supprimer un ouvrage', ['class' => 'btn btn-primary'])
            ->finForm();
        return $form;
    }
}