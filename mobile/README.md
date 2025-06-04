# React Native Mobile App

This directory contains the React Native application for Cancheroo. Environment variables are loaded using the `react-native-dotenv` Babel plugin.

## Setup

1. Install dependencies:

```bash
npm install
```

2. Create a `.env` file in this directory based on the keys your app needs. For example:

```bash
API_URL=http://cancheroo.ddev.site
```

3. Rebuild the app after changing environment variables:

```bash
npm run android # or npm run ios
```

During development, restart the Metro bundler for changes to take effect.
