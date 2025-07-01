import globals from 'globals';
import stylistic from '@stylistic/eslint-plugin';

export default [
  {
    languageOptions: {
      ecmaVersion: 2018,
      sourceType: 'module',
      globals: {
        ...globals.browser,
      },
    },

    plugins: {
      '@stylistic': stylistic,
    },

    rules: {
      // Style rules
      '@stylistic/indent': ['error', 2],
      '@stylistic/quotes': ['error', 'single', { avoidEscape: true }],
      '@stylistic/semi': ['error', 'always'],

      // Logic rules
      'no-undef': 'off',
      'no-unused-vars': ['error', { vars: 'all', args: 'after-used', ignoreRestSiblings: true }],
    },
  },
];
