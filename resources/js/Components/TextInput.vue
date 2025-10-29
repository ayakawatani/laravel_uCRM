<script setup>
import { onMounted, ref } from 'vue';

// 👇 親から受け取る値の宣言
// 親の v-model の値が modelValue に入る
defineProps(['modelValue']);

// 👇 親にイベントを送る宣言
// 入力が変わったら 'update:modelValue' イベントで親に知らせる
defineEmits(['update:modelValue']);


// 👇 input要素への参照を作る
// この ref を使ってフォーカスなどを操作できる
const input = ref(null);

// 👇 コンポーネントが画面に出た後に実行される処理
onMounted(() => {
    // 👇 input に autofocus 属性があれば自動でカーソルを入れる
    if (input.value.hasAttribute('autofocus')) {
        input.value.focus();
    }
});


// 👇 親コンポーネントから呼び出せる関数を公開
// これで親が myInputRef.value.focus() と書ける
defineExpose({ focus: () => input.value.focus() });
</script>

<template>
    <!-- 👇 実際の入力欄 -->
    <input
        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
        :value="modelValue"
        @input="$emit('update:modelValue', $event.target.value)"
        ref="input"
    />
</template>
