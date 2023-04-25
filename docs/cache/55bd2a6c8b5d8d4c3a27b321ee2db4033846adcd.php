<?php $__env->startSection('content'); ?><h1 id="about-gdpr">About Gdpr</h1>

<p>Il modulo "module_gdpr" è un pacchetto per Laravel che fornisce funzionalità per la gestione del Regolamento Generale sulla Protezione dei Dati (GDPR) all'interno di un'applicazione Laravel. Il modulo include metodi per gestire i consensi degli utenti, le richieste di accesso, cancellazione e portabilità dei dati, nonché per generare i moduli per l'acquisizione dei consensi e le informative sulla privacy.</p>

<p>Per utilizzare il modulo, è necessario installarlo tramite Composer con il comando composer require laraxot/module_gdpr. Una volta installato, il modulo può essere utilizzato nell'applicazione Laravel tramite il seguente codice:</p>

<p>Copy code
use Laraxot\ModuleGdpr\Facades\ModuleGdpr;
Il modulo include diverse funzionalità per la gestione del GDPR, come ad esempio il metodo consent() per gestire il consenso degli utenti, o il metodo getRequests() per recuperare le richieste degli utenti per l'accesso, cancellazione e portabilità dei dati.</p>

<p>Per utilizzare il modulo, è necessario prima configurare l'applicazione per supportare le funzionalità del GDPR. La configurazione può essere eseguita tramite il comando Artisan php artisan gdpr:install, che creerà le tabelle del database necessarie per gestire i consensi e le richieste degli utenti, e aggiungerà le route e i controller per la gestione del GDPR all'applicazione.</p>

<p>Una volta configurato il modulo, è possibile utilizzarlo per gestire i consensi degli utenti, gestire le richieste degli utenti per l'accesso, cancellazione e portabilità dei dati, e generare i moduli per l'acquisizione dei consensi e le informative sulla privacy. Per ulteriori informazioni su come utilizzare il modulo e su tutte le sue funzionalità, consultare la documentazione disponibile nel repository su GitHub.</p>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('_layouts.documentation', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>