<script setup>//「動き」や「データの中身」を書く場所。普通のjavascriptに近い
import { Link } from '@inertiajs/vue3';// ← LaravelのInertia用リンク
import { ref } from 'vue'// ← Vueのリアクティブ変数

// 入力した文字を覚える変数（リアクティブ！）
const newTitle=ref('')
const newContent=ref('')
</script>

<template>
Inertiaテストです。<br>
<a href="/">aタグ経由です</a><br>
<Link href="/">Link経由です</Link><br>
<Link :href="route('inertia.index')">名前付きルートの確認です</Link><br>
<Link :href="route('inertia.show',{ id:50 })">ルートパラメータのテストです</Link><!--inertia.show という名前のルートに
id=50 を渡して移動してね！-->

<div clas="mb-8"></div>
<input type="text" name="newTitle" v-model="newTitle">{{ newTitle }}<br>
<input type="text" name="newTitle" v-model="newContent">{{ newContent }}<br>
<Link as="button" method="post" :href="route('inertia.store')" 
:data="{
    title: newTitle,
    content: newContent
}">DB保存テスト</Link>

<!--v-model は「入力した内容を変数にリアルタイムで入れる」

{{ newTitle }} は「変数の中身を表示」

Link コンポーネントで「Laravelにデータ送信（POST）」してる！-->

</template>