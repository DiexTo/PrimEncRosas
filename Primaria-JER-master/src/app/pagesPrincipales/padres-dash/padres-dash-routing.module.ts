import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';

import { PadresDashPage } from './padres-dash.page';

const routes: Routes = [
  {
    path: '',
    component: PadresDashPage
  }
];

@NgModule({
  imports: [RouterModule.forChild(routes)],
  exports: [RouterModule],
})
export class PadresDashPageRoutingModule {}
