<?php

namespace App\Form;

use App\Service\Form;
use App\Model\modelAssociation;


class FormAssociation
{
    public static function buildAddAssociation()
    {
        $form = new Form();

        $form->debutForm('post', URL_ROOT . 'admin/association/add')
            ->ajoutLabelFor('number', 'idAssociation :')
            ->ajoutInput('number', 'idAssociation', ['idAssociation' => 'association', 'class' => 'form-control'])
            ->ajoutLabelFor('number', 'idAbonne :')
            ->ajoutInput('number', 'idAbonne', ['idAbonne' => 'abonne', 'class' => 'form-control'])
            ->ajoutLabelFor('number', 'idOuvrage :')
            ->ajoutInput('number', 'idOuvrage', ['idOuvrage' => 'ouvrage', 'class' => 'form-control'])
            ->ajoutBouton('Ajouter une association', ['class' => 'btn btn-primary'])
            ->finForm();
        return $form;
    }

    public static function buildUpdateAbonne(Abonne $abonne)
    {
        $form = new Form();

        $form->debutForm('post', URL_ROOT . 'update/' . $abonne->getIdAbonne())
        ->ajoutLabelFor('number', 'idAssociation :')
            ->ajoutInput('number', 'idAssociation', ['idAssociation' => 'association', 'class' => 'form-control'])
            ->ajoutLabelFor('number', 'idAbonne :')
            ->ajoutInput('number', 'idAbonne', ['idAbonne' => 'abonne', 'class' => 'form-control'])
            ->ajoutLabelFor('number', 'idOuvrage :')
            ->ajoutInput('number', 'idOuvrage', ['idOuvrage' => 'ouvrage', 'class' => 'form-control'])
            ->ajoutBouton('Mettre à jour une association', ['class' => 'btn btn-primary'])
            ->finForm();
        return $form;
    }

    public static function buildDeleteAbonne($abonne)
    {
        $form = new Form();

        $form->debutForm('post', URL_ROOT . 'Delete/' . $abonne->getIdAbonne())
        ->ajoutLabelFor('number', 'idAssociation :')
        ->ajoutInput('number', 'idAssociation', ['idAssociation' => 'association', 'class' => 'form-control'])
        ->ajoutLabelFor('number', 'idAbonne :')
        ->ajoutInput('number', 'idAbonne', ['idAbonne' => 'abonne', 'class' => 'form-control'])
        ->ajoutLabelFor('number', 'idOuvrage :')
        ->ajoutInput('number', 'idOuvrage', ['idOuvrage' => 'ouvrage', 'class' => 'form-control'])
        ->ajoutBouton('Supprimer une association', ['class' => 'btn btn-primary'])
        ->finForm();
        return $form;
    }
}