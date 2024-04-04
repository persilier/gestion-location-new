<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // reset cached roles and permissions
        app()[\Spatie\Permission\PermissionRegistrar::class]->forgetCachedPermissions();

        // BIENS
        $viewBien = 'view Bien';
        $addBien = 'add Bien';
        $editBien = 'edit Bien';
        $deleteBien = 'delete Bien';
        $importBien = 'import Bien';
        $exportBien = 'export Bien';

        // UTILISATEURS
        $viewUser = 'view User';
        $addUser = 'add User';
        $editUser = 'edit User';
        $deleteUser = 'delete User';
        $importUser = 'import User';
        $exportUser = 'export User';

        // AGENTS
        $viewAgent = 'view Agent';
        $addAgent = 'add Agent';
        $editAgent = 'edit Agent';
        $deleteAgent = 'delete Agent';
        $importAgent = 'import Agent';
        $exportAgent = 'export Agent';

        // AGENCE
        $viewAgence = 'view Agence';
        $editAgence = 'edit Agence';

        // LOCATAIRES
        $viewLocataire = 'view Locataire';
        $addLocataire = 'add Locataire';
        $editLocataire = 'edit Locataire';
        $deleteLocataire = 'delete Locataire';
        $importLocataire = 'import Locataire';
        $exportLocataire = 'export Locataire';

        // PROPRIETAIRES
        $viewProprietaire = 'view Proprietaire';
        $addProprietaire = 'add Proprietaire';
        $editProprietaire = 'edit Proprietaire';
        $deleteProprietaire = 'delete Proprietaire';
        $importProprietaire = 'import Proprietaire';
        $exportProprietaire = 'export Proprietaire';

        // LOCATIONS
        $viewLocation = 'view Location';
        $addLocation = 'add Location';
        $editLocation = 'edit Location';
        $deleteLocation = 'delete Location';
        $importLocation = 'import Location';
        $exportLocation = 'export Location';

        // ABONNEMENTS
        $viewAbonnement = 'view Abonnement';
        $addAbonnement = 'add Abonnement';
        $editAbonnement = 'edit Abonnement';
        $deleteAbonnement = 'delete Abonnement';
        $importAbonnement = 'import Abonnement';
        $exportAbonnement = 'export Abonnement';

        // LOYERS
        $viewLoyer = 'view Loyer';
        $addLoyer = 'add Loyer';
        $editLoyer = 'edit Loyer';
        $deleteLoyer = 'delete Loyer';
        $importLoyer = 'import Loyer';
        $exportLoyer = 'export Loyer';

        // PAIEMENTS
        $viewPaiement = 'view Paiement';
        $addPaiement = 'add Paiement';
        $editPaiement = 'edit Paiement';
        $deletePaiement = 'delete Paiement';
        $importPaiement = 'import Paiement';
        $exportPaiement = 'export Paiement';

        // VISITES
        $viewVisite = 'view Visite';
        $addVisite = 'add Visite';
        $editVisite = 'edit Visite';
        $deleteVisite = 'delete Visite';
        $importVisite = 'import Visite';
        $exportVisite = 'export Visite';

        // DEPENSES
        $viewDepense = 'view Depense';
        $addDepense = 'add Depense';
        $editDepense = 'edit Depense';
        $deleteDepense = 'delete Depense';
        $importDepense = 'import Depense';
        $exportDepense = 'export Depense';

        // RECLAMATIONS
        $viewReclamation = 'view Reclamation';
        $addReclamation = 'add Reclamation';
        $editReclamation = 'edit Reclamation';
        $deleteReclamation = 'delete Reclamation';
        $importReclamation = 'import Reclamation';
        $exportReclamation = 'export Reclamation';

        // CONTRATS
        $viewContrat = 'view Contrat';
        $addContrat = 'add Contrat';
        $editContrat = 'edit Contrat';
        $deleteContrat = 'delete Contrat';
        $importContrat = 'import Contrat';
        $exportContrat = 'export Contrat';

        // ADMIN SECTION
        $viewAdmin = 'view Admin';
        $addAdmin = 'add Admin';
        $editAdmin = 'edit Admin';
        $deleteAdmin = 'delete Admin';
        $importAdmin = 'import Admin';
        $exportAdmin = 'export Admin';

        // create permissions for Managing Biens
        Permission::create(['name' => $addBien]);
        Permission::create(['name' => $editBien]);
        Permission::create(['name' => $deleteBien]);
        Permission::create(['name' => $viewBien]);
        Permission::create(['name' => $importBien]);
        Permission::create(['name' => $exportBien]);

        // create permissions for Managing Users
        Permission::create(['name' => $addUser]);
        Permission::create(['name' => $editUser]);
        Permission::create(['name' => $deleteUser]);
        Permission::create(['name' => $viewUser]);
        Permission::create(['name' => $importUser]);
        Permission::create(['name' => $exportUser]);

        // create permissions for Managing Agents
        Permission::create(['name' => $addAgent]);
        Permission::create(['name' => $editAgent]);
        Permission::create(['name' => $deleteAgent]);
        Permission::create(['name' => $viewAgent]);
        Permission::create(['name' => $importAgent]);
        Permission::create(['name' => $exportAgent]);

        // create permissions for Managing Agence
        Permission::create(['name' => $editAgence]);
        Permission::create(['name' => $viewAgence]);


        // create permissions for Managing Locataire
        Permission::create(['name' => $addLocataire]);
        Permission::create(['name' => $editLocataire]);
        Permission::create(['name' => $deleteLocataire]);
        Permission::create(['name' => $viewLocataire]);
        Permission::create(['name' => $importLocataire]);
        Permission::create(['name' => $exportLocataire]);


        // create permissions for Managing Proprietaire
        Permission::create(['name' => $addProprietaire]);
        Permission::create(['name' => $editProprietaire]);
        Permission::create(['name' => $deleteProprietaire]);
        Permission::create(['name' => $viewProprietaire]);
        Permission::create(['name' => $importProprietaire]);
        Permission::create(['name' => $exportProprietaire]);

        // create permissions for Managing Location
        Permission::create(['name' => $addLocation]);
        Permission::create(['name' => $editLocation]);
        Permission::create(['name' => $deleteLocation]);
        Permission::create(['name' => $viewLocation]);
        Permission::create(['name' => $importLocation]);
        Permission::create(['name' => $exportLocation]);

        // create permissions for Managing Depense
        Permission::create(['name' => $addDepense]);
        Permission::create(['name' => $editDepense]);
        Permission::create(['name' => $deleteDepense]);
        Permission::create(['name' => $viewDepense]);
        Permission::create(['name' => $importDepense]);
        Permission::create(['name' => $exportDepense]);

        // create permissions for Managing Reclamation
        Permission::create(['name' => $addReclamation]);
        Permission::create(['name' => $editReclamation]);
        Permission::create(['name' => $deleteReclamation]);
        Permission::create(['name' => $viewReclamation]);
        Permission::create(['name' => $importReclamation]);
        Permission::create(['name' => $exportReclamation]);

        // create permissions for Managing paiements
        Permission::create(['name' => $addPaiement]);
        Permission::create(['name' => $editPaiement]);
        Permission::create(['name' => $deletePaiement]);
        Permission::create(['name' => $viewPaiement]);
        Permission::create(['name' => $importPaiement]);
        Permission::create(['name' => $exportPaiement]);

        // create permissions for Managing Abonnements
        Permission::create(['name' => $addAbonnement]);
        Permission::create(['name' => $editAbonnement]);
        Permission::create(['name' => $deleteAbonnement]);
        Permission::create(['name' => $viewAbonnement]);
        Permission::create(['name' => $importAbonnement]);
        Permission::create(['name' => $exportAbonnement]);

        // create permissions for Managing Loyers
        Permission::create(['name' => $addLoyer]);
        Permission::create(['name' => $editLoyer]);
        Permission::create(['name' => $deleteLoyer]);
        Permission::create(['name' => $viewLoyer]);
        Permission::create(['name' => $importLoyer]);
        Permission::create(['name' => $exportLoyer]);

        // create permissions for Managing visites
        Permission::create(['name' => $addVisite]);
        Permission::create(['name' => $editVisite]);
        Permission::create(['name' => $deleteVisite]);
        Permission::create(['name' => $viewVisite]);
        Permission::create(['name' => $importVisite]);
        Permission::create(['name' => $exportVisite]);

        // create permissions for Managing contrats
        Permission::create(['name' => $addContrat]);
        Permission::create(['name' => $editContrat]);
        Permission::create(['name' => $deleteContrat]);
        Permission::create(['name' => $viewContrat]);
        Permission::create(['name' => $importContrat]);
        Permission::create(['name' => $exportContrat]);

        // create permissions for Managing adminsection
        Permission::create(['name' => $addAdmin]);
        Permission::create(['name' => $editAdmin]);
        Permission::create(['name' => $deleteAdmin]);
        Permission::create(['name' => $viewAdmin]);
        Permission::create(['name' => $importAdmin]);
        Permission::create(['name' => $exportAdmin]);


        // Define available Roles
        $admin = 'admin';
        $manager = 'manager';
        $employe = 'employe';
        $locataire = 'locataire';
        $proprietaire = 'proprietaire';

        Role::create([
            'name' => $admin,
        ])->givePermissionTo(Permission::all());
        Role::create([
            'name' => $manager,
        ])->givePermissionTo([
            $viewBien,
            $addBien,
            $editBien,
            $deleteBien,
            $exportBien,
            $importBien,
            $viewUser,
            $addUser,
            $editUser,
            $deleteUser,
            $exportUser,
            $importUser,
            $viewAgent,
            $addAgent,
            $editAgent,
            $deleteAgent,
            $exportAgent,
            $importAgent,
            $viewAgence,
            $editAgence,
            $viewLocataire,
            $addLocataire,
            $editLocataire,
            $deleteLocataire,
            $exportLocataire,
            $importLocataire,
            $viewProprietaire,
            $addProprietaire,
            $editProprietaire,
            $deleteProprietaire,
            $exportProprietaire,
            $importProprietaire,
            $viewLocation,
            $addLocation,
            $editLocation,
            $deleteLocation,
            $exportLocation,
            $importLocation,
            $viewLoyer,
            $addLoyer,
            $editLoyer,
            $deleteLoyer,
            $exportLoyer,
            $importLoyer,
            $viewPaiement,
            $addPaiement,
            $editPaiement,
            $deletePaiement,
            $exportPaiement,
            $importPaiement,
            $viewAbonnement,
            $addAbonnement,
            $editAbonnement,
            $deleteAbonnement,
            $exportAbonnement,
            $importAbonnement,
            $viewContrat,
            $addContrat,
            $editContrat,
            $deleteContrat,
            $exportContrat,
            $importContrat,
            $viewReclamation,
            $addReclamation,
            $editReclamation,
            $deleteReclamation,
            $exportReclamation,
            $importReclamation,
            $viewDepense,
            $addDepense,
            $editDepense,
            $deleteDepense,
            $exportDepense,
            $importDepense,
            $viewVisite,
            $addVisite,
            $editVisite,
            $deleteVisite,
            $exportVisite,
            $importVisite,

        ]);
        Role::create([
            'name' => $employe,
        ])->givePermissionTo([
            $viewBien,
            $exportBien,
            $viewAgent,
            $exportAgent,
            $viewLocataire,
            $exportLocataire,
            $viewProprietaire,
            $exportProprietaire,
            $viewLocation,
            $exportLocation,
            $viewLoyer,
            $exportLoyer,
            $viewPaiement,
            $exportPaiement,
            $viewAbonnement,
            $exportAbonnement,
            $viewContrat,
            $exportContrat,
            $viewReclamation,
            $exportReclamation,
            $viewDepense,
            $exportDepense,
            $viewVisite,
            $exportVisite,
        ]);
        Role::create(['name' => $locataire])->givePermissionTo([
            $viewLocataire,
            $viewLocation,
            $viewLoyer,
            $viewPaiement,
            $viewContrat,
            $viewReclamation,
            $addReclamation,
            $editReclamation,
        ]);
        Role::create([
            'name' => $proprietaire,
        ])->givePermissionTo([
            $viewBien,
            $viewLocataire,
            $viewProprietaire,
            $viewLocation,
            $viewContrat,
            $viewLoyer,
            $viewPaiement,
            $viewAbonnement,
        ]);
    }
}
