import { NgModule } from '@angular/core';
import { CommonModule } from '@angular/common';
import { FormsModule } from '@angular/forms';

import { IonicModule } from '@ionic/angular';

import { DirectorDashPageRoutingModule } from './director-dash-routing.module';

import { DirectorDashPage } from './director-dash.page';

@NgModule({
  imports: [
    CommonModule,
    FormsModule,
    IonicModule,
    DirectorDashPageRoutingModule
  ],
  declarations: [DirectorDashPage]
})
export class DirectorDashPageModule {}
