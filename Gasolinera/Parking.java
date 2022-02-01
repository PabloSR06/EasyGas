import es.upm.babel.cclib.Semaphore;

public class Parking {
    private static int N_THREADS = 20;
    private static int CAPAC = 15;
    private static int N_PASOS = 10;

    // semáforo para gestionar acceso al aparcamiento
    // static int plazas = CAPAC;
    // inicialmente el parking está vacío
    // queremos que se cumpla siempre:
    // sPlazas.cont() = plazas;
    static Semaphore sPlazas = new Semaphore (CAPAC);

    static class Contador {
	private volatile int n;
	public Contador() {
	    this.n = 0;
	}
	public int valorContador() {
	    return this.n;
	}
	public void inc () {
	    this.n++;
	}
	public void dec () {
	    this.n--;
	}
    }	

    static class Coche extends Thread {
	private Contador cont;
	private int id;
	public Coche (int i) {
	    this.id = i;
	}
	public void run() {
	    for (int i = 0; i < N_PASOS; i++) {
		System.out.printf("Soy el coche no. %d y quiero entrar\n",
			  this.id);
		// esperar a que plazas > 0 e inmediatamente plazas--
		// equivale a:
	        sPlazas.await();
		System.out.printf("Soy el coche no. %d y estoy aparcando\n",
			  this.id);
		// nos quedamos un ratito aparcados
		try {
		    this.sleep(5000);
		} catch (InterruptedException e) {
		    System.out.print("¿Quién osa despertarme????????????????");
		}
		// salimos
		System.out.printf("Soy el coche no. %d y salgo del parking\n",
			  this.id);
		// plazas++;
		// equivale a:
		sPlazas.signal();
	    }
	}
    }
   
    public static void main(String args[]) {
      
	// Creación de los arrays que contendrán los threads
	Coche[] coches = new Coche[N_THREADS];
      
	// Creacion de los objetos threads
	for (int i = 0; i < N_THREADS; i++) {
	    coches[i] = new Coche(i);
	}
      
	// Lanzamiento de los threads
	for (int i = 0; i < N_THREADS; i++) {
	    coches[i].start();
	}
      
	// Espera hasta la terminacion de los threads
	try {
	    for (int i = 0; i < N_THREADS; i++) {
		coches[i].join();
	    }
	} catch (Exception ex) {
	    ex.printStackTrace();
	    System.exit (-1);
	}
      
	System.exit (0);
    }
}
