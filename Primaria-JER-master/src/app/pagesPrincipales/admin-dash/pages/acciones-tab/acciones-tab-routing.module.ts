import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { AccionesTabPage } from './acciones-tab.page';

const routes: Routes = [
  {
    path: '',
    component: AccionesTabPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class AccionesTabPageRoutingModule {}
