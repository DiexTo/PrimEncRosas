import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { TabsPage } from './tabs.page';

const routes: Routes = [
  {
    path: '',
    component: TabsPage,
    children:[

      {
        path: 'acciones',
        loadChildren: () => import('../pages/acciones-tab/acciones-tab.module').then( m => m.AccionesTabPageModule)
      },
      {
        path: 'notificaciones',
        loadChildren: () => import('../pages/notificaciones-tab/notificaciones-tab.module').then( m => m.NotificacionesTabPageModule)
      }

      // {
      //   path: '',
      //   redirectTo:'/admin-dash/tabs/acciones',
      //   pathMatch:'full'
      // }

    ]
  }
  
  
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class TabsPageRoutingModule {}
