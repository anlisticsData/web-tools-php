<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyLib - Documentação</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary: #6366f1;
            --primary-dark: #4f46e5;
            --secondary: #8b5cf6;
            --bg: #0f172a;
            --bg-light: #1e293b;
            --bg-lighter: #334155;
            --text: #e2e8f0;
            --text-muted: #94a3b8;
            --border: #334155;
            --success: #10b981;
            --code-bg: #1e293b;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, sans-serif;
            line-height: 1.6;
            color: var(--text);
            background: var(--bg);
        }

        .container {
            display: flex;
            min-height: 100vh;
        }

        /* Sidebar */
        .sidebar {
            width: 280px;
            background: var(--bg-light);
            border-right: 1px solid var(--border);
            position: fixed;
            height: 100vh;
            overflow-y: auto;
            padding: 2rem 0;
        }

        .logo {
            padding: 0 2rem 1.5rem;
            border-bottom: 1px solid var(--border);
            margin-bottom: 2rem;
        }

        .logo h1 {
            font-size: 1.75rem;
            color: var(--primary);
            font-weight: 700;
        }

        .logo p {
            color: var(--text-muted);
            font-size: 0.875rem;
            margin-top: 0.25rem;
        }

        .nav-section {
            margin-bottom: 2rem;
        }

        .nav-title {
            padding: 0 2rem;
            font-size: 0.75rem;
            font-weight: 600;
            text-transform: uppercase;
            color: var(--text-muted);
            letter-spacing: 0.05em;
            margin-bottom: 0.5rem;
        }

        .nav-link {
            display: block;
            padding: 0.75rem 2rem;
            color: var(--text);
            text-decoration: none;
            transition: all 0.2s;
            border-left: 3px solid transparent;
        }

        .nav-link:hover {
            background: var(--bg-lighter);
            color: var(--primary);
            border-left-color: var(--primary);
        }

        .nav-link.active {
            background: var(--bg-lighter);
            color: var(--primary);
            border-left-color: var(--primary);
            font-weight: 500;
        }

        /* Main Content */
        .main {
            flex: 1;
            margin-left: 280px;
            padding: 3rem;
            max-width: 1200px;
        }

        .hero {
            background: linear-gradient(135deg, var(--primary) 0%, var(--secondary) 100%);
            border-radius: 1rem;
            padding: 3rem;
            margin-bottom: 3rem;
            box-shadow: 0 20px 25px -5px rgba(0, 0, 0, 0.3);
        }

        .hero h1 {
            font-size: 2.5rem;
            margin-bottom: 1rem;
            font-weight: 700;
        }

        .hero p {
            font-size: 1.125rem;
            opacity: 0.95;
            margin-bottom: 2rem;
        }

        .hero-buttons {
            display: flex;
            gap: 1rem;
            flex-wrap: wrap;
        }

        .btn {
            padding: 0.75rem 1.5rem;
            border-radius: 0.5rem;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.2s;
            display: inline-block;
            cursor: pointer;
            border: none;
            font-size: 1rem;
        }

        .btn-primary {
            background: white;
            color: var(--primary);
        }

        .btn-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(0, 0, 0, 0.2);
        }

        .btn-secondary {
            background: rgba(255, 255, 255, 0.2);
            color: white;
            border: 1px solid rgba(255, 255, 255, 0.3);
        }

        .btn-secondary:hover {
            background: rgba(255, 255, 255, 0.3);
        }

        /* Content Sections */
        .section {
            margin-bottom: 4rem;
        }

        .section h2 {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: var(--text);
            padding-bottom: 0.5rem;
            border-bottom: 2px solid var(--border);
        }

        .section h3 {
            font-size: 1.5rem;
            margin: 2rem 0 1rem;
            color: var(--text);
        }

        .section p {
            color: var(--text-muted);
            margin-bottom: 1rem;
            line-height: 1.8;
        }

        /* Code Blocks */
        .code-block {
            background: var(--code-bg);
            border: 1px solid var(--border);
            border-radius: 0.5rem;
            padding: 1.5rem;
            margin: 1.5rem 0;
            overflow-x: auto;
            position: relative;
        }

        .code-block pre {
            margin: 0;
            font-family: 'Monaco', 'Menlo', 'Consolas', monospace;
            font-size: 0.875rem;
            line-height: 1.6;
        }

        .code-block code {
            color: #e2e8f0;
        }

        .code-label {
            position: absolute;
            top: 0.5rem;
            right: 0.5rem;
            background: var(--bg-lighter);
            color: var(--text-muted);
            padding: 0.25rem 0.75rem;
            border-radius: 0.25rem;
            font-size: 0.75rem;
            font-weight: 500;
        }

        /* Cards */
        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
            gap: 1.5rem;
            margin: 2rem 0;
        }

        .card {
            background: var(--bg-light);
            border: 1px solid var(--border);
            border-radius: 0.75rem;
            padding: 2rem;
            transition: all 0.3s;
        }

        .card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.3);
            border-color: var(--primary);
        }

        .card-icon {
            width: 3rem;
            height: 3rem;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            border-radius: 0.75rem;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            margin-bottom: 1rem;
        }

        .card h3 {
            margin: 0 0 0.5rem 0;
            font-size: 1.25rem;
        }

        .card p {
            margin: 0;
            font-size: 0.925rem;
        }

        /* Table */
        .table-wrapper {
            overflow-x: auto;
            margin: 1.5rem 0;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            background: var(--bg-light);
            border-radius: 0.5rem;
            overflow: hidden;
        }

        thead {
            background: var(--bg-lighter);
        }

        th, td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid var(--border);
        }

        th {
            font-weight: 600;
            color: var(--text);
        }

        td {
            color: var(--text-muted);
        }

        tr:last-child td {
            border-bottom: none;
        }

        tbody tr:hover {
            background: var(--bg-lighter);
        }

        /* Badge */
        .badge {
            display: inline-block;
            padding: 0.25rem 0.75rem;
            border-radius: 0.25rem;
            font-size: 0.75rem;
            font-weight: 500;
            margin-right: 0.5rem;
        }

        .badge-success {
            background: rgba(16, 185, 129, 0.2);
            color: var(--success);
        }

        .badge-primary {
            background: rgba(99, 102, 241, 0.2);
            color: var(--primary);
        }

        /* Syntax Highlighting */
        .keyword { color: #c678dd; }
        .string { color: #98c379; }
        .function { color: #61afef; }
        .comment { color: #5c6370; font-style: italic; }
        .number { color: #d19a66; }

        /* Responsive */
        @media (max-width: 768px) {
            .sidebar {
                transform: translateX(-100%);
                z-index: 1000;
            }

            .main {
                margin-left: 0;
                padding: 1.5rem;
            }

            .hero {
                padding: 2rem;
            }

            .hero h1 {
                font-size: 1.75rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Sidebar -->
        <aside class="sidebar">
            <div class="logo">
                <h1>MyLib</h1>
                <p>v1.0.0</p>
            </div>

            <nav>
                <div class="nav-section">
                    <div class="nav-title">Início</div>
                    <a href="#intro" class="nav-link active">Introdução</a>
                    <a href="#installation" class="nav-link">Instalação</a>
                    <a href="#quickstart" class="nav-link">Quick Start</a>
                </div>

                <div class="nav-section">
                    <div class="nav-title">Guias</div>
                    <a href="#usage" class="nav-link">Uso Básico</a>
                    <a href="#advanced" class="nav-link">Recursos Avançados</a>
                    <a href="#examples" class="nav-link">Exemplos</a>
                </div>

                <div class="nav-section">
                    <div class="nav-title">Referência</div>
                    <a href="#api" class="nav-link">API Reference</a>
                    <a href="#config" class="nav-link">Configuração</a>
                    <a href="#faq" class="nav-link">FAQ</a>
                </div>
            </nav>
        </aside>

        <!-- Main Content -->
        <main class="main">
            <!-- Hero -->
            <div class="hero">
                <h1>🚀 Bem-vindo ao MyLib</h1>
                <p>Uma biblioteca poderosa e moderna para desenvolvimento JavaScript. Simples de usar, impossível de largar.</p>
                <div class="hero-buttons">
                    <a href="#installation" class="btn btn-primary">Começar Agora</a>
                    <a href="#api" class="btn btn-secondary">Ver Documentação</a>
                </div>
            </div>

            <!-- Introduction -->
            <section id="intro" class="section">
                <h2>Introdução</h2>
                <p>MyLib é uma biblioteca JavaScript moderna que simplifica tarefas comuns de desenvolvimento, oferecendo uma API intuitiva e performance excepcional.</p>

                <div class="card-grid">
                    <div class="card">
                        <div class="card-icon">⚡</div>
                        <h3>Super Rápida</h3>
                        <p>Otimizada para performance máxima em qualquer ambiente</p>
                    </div>
                    <div class="card">
                        <div class="card-icon">🎯</div>
                        <h3>Fácil de Usar</h3>
                        <p>API intuitiva e documentação completa para começar em minutos</p>
                    </div>
                    <div class="card">
                        <div class="card-icon">🔧</div>
                        <h3>Flexível</h3>
                        <p>Configurável para se adaptar às suas necessidades específicas</p>
                    </div>
                </div>
            </section>

            <!-- Installation -->
            <section id="installation" class="section">
                <h2>Instalação</h2>
                <p>Instale o MyLib via npm, yarn ou pnpm:</p>

                <div class="code-block">
                    <span class="code-label">bash</span>
                    <pre><code><span class="comment"># npm</span>
npm install mylib

<span class="comment"># yarn</span>
yarn add mylib

<span class="comment"># pnpm</span>
pnpm add mylib</code></pre>
                </div>

                <h3>CDN</h3>
                <p>Ou use diretamente via CDN:</p>

                <div class="code-block">
                    <span class="code-label">html</span>
                    <pre><code><span class="keyword">&lt;script</span> <span class="string">src="https://cdn.jsdelivr.net/npm/mylib@1.0.0/dist/mylib.min.js"</span><span class="keyword">&gt;&lt;/script&gt;</span></code></pre>
                </div>
            </section>

            <!-- Quick Start -->
            <section id="quickstart" class="section">
                <h2>Quick Start</h2>
                <p>Comece a usar MyLib em poucos minutos:</p>

                <div class="code-block">
                    <span class="code-label">javascript</span>
                    <pre><code><span class="keyword">import</span> { MyLib } <span class="keyword">from</span> <span class="string">'mylib'</span>;

<span class="comment">// Crie uma instância</span>
<span class="keyword">const</span> lib = <span class="keyword">new</span> <span class="function">MyLib</span>({
  <span class="string">apiKey</span>: <span class="string">'your-api-key'</span>,
  <span class="string">debug</span>: <span class="keyword">true</span>
});

<span class="comment">// Use os recursos</span>
lib.<span class="function">doSomething</span>()
  .<span class="function">then</span>(<span class="string">result</span> => <span class="function">console.log</span>(result))
  .<span class="function">catch</span>(<span class="string">error</span> => <span class="function">console.error</span>(error));</code></pre>
                </div>
            </section>

            <!-- Usage -->
            <section id="usage" class="section">
                <h2>Uso Básico</h2>
                <p>Aqui estão alguns exemplos comuns de uso do MyLib:</p>

                <h3>Exemplo 1: Processamento de Dados</h3>
                <div class="code-block">
                    <span class="code-label">javascript</span>
                    <pre><code><span class="keyword">const</span> data = lib.<span class="function">process</span>([<span class="number">1</span>, <span class="number">2</span>, <span class="number">3</span>, <span class="number">4</span>, <span class="number">5</span>]);
<span class="function">console.log</span>(data); <span class="comment">// Dados processados</span></code></pre>
                </div>

                <h3>Exemplo 2: Validação</h3>
                <div class="code-block">
                    <span class="code-label">javascript</span>
                    <pre><code><span class="keyword">const</span> isValid = lib.<span class="function">validate</span>({
  <span class="string">email</span>: <span class="string">'user@example.com'</span>,
  <span class="string">age</span>: <span class="number">25</span>
});

<span class="keyword">if</span> (isValid) {
  <span class="function">console.log</span>(<span class="string">'Dados válidos!'</span>);
}</code></pre>
                </div>
            </section>

            <!-- API Reference -->
            <section id="api" class="section">
                <h2>API Reference</h2>
                <p>Referência completa dos métodos disponíveis:</p>

                <div class="table-wrapper">
                    <table>
                        <thead>
                            <tr>
                                <th>Método</th>
                                <th>Parâmetros</th>
                                <th>Retorno</th>
                                <th>Descrição</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td><code>process()</code></td>
                                <td><code>Array</code></td>
                                <td><code>Array</code></td>
                                <td>Processa um array de dados</td>
                            </tr>
                            <tr>
                                <td><code>validate()</code></td>
                                <td><code>Object</code></td>
                                <td><code>Boolean</code></td>
                                <td>Valida um objeto de dados</td>
                            </tr>
                            <tr>
                                <td><code>transform()</code></td>
                                <td><code>Any, Function</code></td>
                                <td><code>Any</code></td>
                                <td>Transforma dados com função customizada</td>
                            </tr>
                            <tr>
                                <td><code>fetch()</code></td>
                                <td><code>String, Object</code></td>
                                <td><code>Promise</code></td>
                                <td>Busca dados de uma API</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <h3>Método process()</h3>
                <p><span class="badge badge-success">Estável</span> <span class="badge badge-primary">v1.0.0</span></p>
                <p>Processa um array de dados aplicando transformações configuradas.</p>

                <div class="code-block">
                    <span class="code-label">javascript</span>
                    <pre><code>lib.<span class="function">process</span>(data: Array): Array</code></pre>
                </div>

                <p><strong>Parâmetros:</strong></p>
                <ul style="color: var(--text-muted); margin-left: 2rem; margin-top: 1rem;">
                    <li><code>data</code> - Array de dados a serem processados</li>
                </ul>

                <p style="margin-top: 1rem;"><strong>Retorna:</strong> Array com dados processados</p>
            </section>

            <!-- Configuration -->
            <section id="config" class="section">
                <h2>Configuração</h2>
                <p>Opções de configuração disponíveis ao inicializar o MyLib:</p>

                <div class="code-block">
                    <span class="code-label">javascript</span>
                    <pre><code><span class="keyword">const</span> lib = <span class="keyword">new</span> <span class="function">MyLib</span>({
  <span class="string">apiKey</span>: <span class="string">'your-api-key'</span>,      <span class="comment">// Obrigatório</span>
  <span class="string">debug</span>: <span class="keyword">false</span>,                  <span class="comment">// Ativa logs de debug</span>
  <span class="string">timeout</span>: <span class="number">5000</span>,                 <span class="comment">// Timeout em ms</span>
  <span class="string">retries</span>: <span class="number">3</span>,                    <span class="comment">// Número de tentativas</span>
  <span class="string">cache</span>: <span class="keyword">true</span>                    <span class="comment">// Ativa cache interno</span>
});</code></pre>
                </div>
            </section>

            <!-- FAQ -->
            <section id="faq" class="section">
                <h2>FAQ</h2>
                
                <h3>Como obter uma API key?</h3>
                <p>Visite nosso portal de desenvolvedores em <code>https://dev.mylib.com</code> e crie uma conta gratuita.</p>

                <h3>MyLib funciona em Node.js?</h3>
                <p>Sim! MyLib é compatível com Node.js versão 14 ou superior e todos os navegadores modernos.</p>

                <h3>Onde posso reportar bugs?</h3>
                <p>Reporte bugs no nosso repositório GitHub: <code>https://github.com/mylib/issues</code></p>
            </section>
        </main>
    </div>

    <script>
        // Smooth scroll para navegação
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                    
                    // Atualiza link ativo
                    document.querySelectorAll('.nav-link').forEach(link => {
                        link.classList.remove('active');
                    });
                    this.classList.add('active');
                }
            });
        });

        // Destaque de código ao copiar
        document.querySelectorAll('.code-block').forEach(block => {
            block.addEventListener('click', function() {
                const code = this.querySelector('code');
                if (code) {
                    navigator.clipboard.writeText(code.textContent);
                    const label = this.querySelector('.code-label');
                    const originalText = label.textContent;
                    label.textContent = 'Copiado!';
                    setTimeout(() => {
                        label.textContent = originalText;
                    }, 2000);
                }
            });
        });
    </script>
</body>
</html>