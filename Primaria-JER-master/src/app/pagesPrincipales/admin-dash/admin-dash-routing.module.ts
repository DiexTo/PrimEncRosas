import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { AdminDashPage } from './admin-dash.page';
import { FormularioComponent } from 'src/app/components/formulario/formulario.component';





const routes: Routes = [
  {
    path: '',
    component: AdminDashPage,
    children:[

      {
        path: 'tabs',
        loadChildren: () => import('./tabs/tabs.module')
        .then( m => m.TabsPageModule)
      },
      {
        path: 'formulario',
        component: FormularioComponent
      },
      {
        path: 'anuncio-menu',
        loadChildren: () => import('./pages/anuncio-menu/anuncio-menu.module')
        .then( m => m.AnuncioMenuPageModule)
      },
      { //admin-dash
        path: '',
        redirectTo:'/profe-dash/tabs/acciones',
        pathMatch:'full'
      }

    ]
  }
  
  
  
];




@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class AdminDashPageRoutingModule {}
