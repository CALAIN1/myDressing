<?php

class ClothingController
{
    // Ajoute un vêtement
    public function addClothing($data)
    {
        $model = new ClothingModel();
        $model->addClothing($data);
        echo 'Vêtement ajouté avec succès.';
    }

    // Met à jour un vêtement
    public function updateClothing($id, $data)
    {
        $model = new ClothingModel();
        $model->updateClothing($id, $data);
        echo 'Vêtement mis à jour.';
    }

    // Supprime un vêtement
    public function deleteClothing($id)
    {
        $model = new ClothingModel();
        $model->deleteClothing($id);
        echo 'Vêtement supprimé.';
    }
}
