import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { NotificacionesTabPage } from './notificaciones-tab.page';

const routes: Routes = [
  {
    path: '',
    component: NotificacionesTabPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class NotificacionesTabPageRoutingModule {}
