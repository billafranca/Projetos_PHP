<template>
    <div id="app">
        <header>
            <h1>{{ title }}</h1>
        </header>
        <main>
            <section>
                <p>{{ message }}</p>
                <button @click="increment">Clique aqui ({{ count }})</button>
            </section>
        </main>
    </div>
</template>

<script>
export default {
    name: 'App',
    data() {
        return {
            title: 'Bem-vindo ao Vue.js',
            message: 'Este é um componente Vue básico',
            count: 0
        }
    },
    methods: {
        increment() {
            this.count++
        }
    }
}
</script>

<style scoped>
#app {
    font-family: Arial, sans-serif;
    padding: 20px;
    max-width: 600px;
    margin: 0 auto;
}

header {
    border-bottom: 2px solid #333;
    padding-bottom: 10px;
    margin-bottom: 20px;
}

button {
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    background-color: #007bff;
    color: white;
    border: none;
    border-radius: 4px;
}

button:hover {
    background-color: #0056b3;
}
</style>