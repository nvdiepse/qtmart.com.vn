<template>
  <v-dialog v-model="dialog2" width="600px">
    <template v-slot:activator="{ on, attrs }">      
      <v-btn
        color="success"
        rounded
        class="light-green accent-4 px-4 pr-6"
        width="120px" 
        dark
        v-bind="attrs"
        v-on="on"
      >
      保存
      </v-btn>
    </template>
    <v-card>
      <v-card-title>
        <span class="text-h5 mt-5">シナリオタイプ</span>
      </v-card-title>
      <v-card-text>
        <v-container>
          <v-row>
            <v-col cols="12" sm="12">
              <v-select
                :items="['0-17', '18-29', '30-54', '54+']"
                label="シナリオタイプ*"
                required
              ></v-select>
            </v-col>
          </v-row>
        </v-container>
        <small>*必須フィールドを示します</small>
      </v-card-text>
      <v-card-actions class="justify-center align-center pb-6">        
        <v-btn color="grey lighten-3" class="light-green accent-4 px-4 pr-6" width="120px" depressed rounded @click="dialog2 = false">
          キャンセル
        </v-btn>
        <v-btn color="success" class="light-green accent-4 px-4 pr-6" width="120px" rounded @click="dialog2 = false"> 保存 </v-btn>
      </v-card-actions>
    </v-card>
  </v-dialog>
</template>

<script>
export default {
  data: () => ({
    dialog2: false,
  }),
};
</script>