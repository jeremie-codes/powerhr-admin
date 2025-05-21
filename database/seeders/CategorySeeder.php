<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Support\Carbon;

class CategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            'Informatique & Développement' => 'Offres dans la programmation, le développement web et logiciel.',
            'Marketing & Communication' => 'Postes en publicité, communication digitale et relations publiques.',
            'Ventes & Commercial' => 'Opportunités pour commerciaux, vendeurs et responsables des ventes.',
            'Administration & Secrétariat' => 'Postes administratifs, secrétariat et assistance de direction.',
            'Finance & Comptabilité' => 'Emplois dans la gestion financière, audit, comptabilité.',
            'Ressources Humaines' => 'Postes RH, recrutement, formation et gestion du personnel.',
            'Transport & Logistique' => 'Métiers liés à la chaîne d’approvisionnement et au transport.',
            'Achats & Approvisionnement' => 'Gestion des achats, fournisseurs et stocks.',
            'Métiers de la Santé' => 'Offres pour médecins, infirmiers, pharmaciens, etc.',
            'Métiers de l’Éducation' => 'Enseignants, éducateurs, formateurs.',
            'Bâtiment & Travaux Publics (BTP)' => 'Emplois dans la construction, ingénierie, architecture.',
            'Énergie & Environnement' => 'Postes dans les énergies renouvelables, environnement.',
            'Juridique & Légal' => 'Métiers d’avocat, juriste, notaire.',
            'Hôtellerie & Restauration' => 'Emplois en cuisine, hôtellerie, service.',
            'Production & Maintenance' => 'Techniciens, ouvriers, production industrielle.',
            'Artisanat & Métiers manuels' => 'Menuisiers, électriciens, plombiers, couturiers.',
            'Direction & Management' => 'Postes de direction, chef de projet, manager.',
            'Graphisme & Design' => 'Créatifs, designers graphiques, UX/UI.',
            'Service Client & Support' => 'Support client, centres d’appel, relation client.',
            'Sécurité & Surveillance' => 'Agents de sécurité, surveillance, gardiennage.',
        ];

        foreach ($categories as $name => $description) {
            DB::table('categories')->insert([
                'name' => $name,
                'slug' => Str::slug($name),
                'description' => $description,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}

