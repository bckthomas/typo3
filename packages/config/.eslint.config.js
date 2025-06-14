import globals from "globals";
import path from "node:path";
import { fileURLToPath } from "node:url";
import js from "@eslint/js";
import { FlatCompat } from "@eslint/eslintrc";
import stylistic from "@stylistic/eslint-plugin";

const __filename = fileURLToPath(import.meta.url);
const __dirname = path.dirname(__filename);
const compat = new FlatCompat({
    baseDirectory: __dirname,
    recommendedConfig: js.configs.recommended,
    allConfig: js.configs.all
});

export default [...compat.extends('eslint:recommended', 'plugin:@stylistic/recommended-extends'), {
    languageOptions: {
        globals: {
            ...globals.browser,
        },

        ecmaVersion: 2015,
        sourceType: 'module',
    },

    plugins: {
      '@stylistic': stylistic
    },

    rules: {
      '@stylistic/indent': ['error', 2],
      "@stylistic/quotes": ['error', 'single', { avoidEscape: true } ],
      '@stylistic/semi': ['error', 'always'],
      'no-undef': 'off',
    },
}];