import { motion } from 'motion/react';
import { ArrowRight, Globe } from 'lucide-react';

export default function App() {
  return (
    <div className="min-h-screen bg-gray-100 flex flex-col items-center justify-center p-4 font-sans">
      <motion.div
        initial={{ opacity: 0, y: 20 }}
        animate={{ opacity: 1, y: 0 }}
        transition={{ duration: 0.6, ease: "easeOut" }}
        className="max-w-lg w-full bg-white rounded-3xl shadow-2xl p-8 md:p-12 text-center space-y-8"
      >
        {/* Logo */}
        <motion.div 
          initial={{ scale: 0.9 }}
          animate={{ scale: 1 }}
          transition={{ duration: 0.5, delay: 0.2 }}
          className="flex justify-center"
        >
          <h1 className="text-5xl font-extrabold text-red-600 tracking-tighter">
            SwaMedia
          </h1>
        </motion.div>

        {/* Icon */}
        <div className="flex justify-center">
          <div className="bg-red-50 p-5 rounded-full">
            <Globe className="w-16 h-16 text-red-500" />
          </div>
        </div>

        {/* Message */}
        <div className="space-y-4">
          <h2 className="text-2xl md:text-3xl font-bold text-gray-900">
            Taarifa Muhimu
          </h2>
          <p className="text-gray-600 text-lg leading-relaxed">
            SwaMedia haitumii tena domain ya <br />
            <span className="font-semibold text-gray-400 line-through decoration-red-500 decoration-2">www.swamedia.online</span>
          </p>
          <div className="bg-gray-50 rounded-xl p-4 border border-gray-100">
            <p className="text-gray-600">Sasa hivi tunatumia anwani hii mpya:</p>
            <p className="font-bold text-red-600 text-xl mt-1">www.swamedia.co.tz</p>
          </div>
        </div>

        {/* Button */}
        <motion.div 
          whileHover={{ scale: 1.02 }}
          whileTap={{ scale: 0.98 }}
          className="pt-2"
        >
          <a
            href="https://www.swamedia.co.tz"
            className="inline-flex items-center justify-center w-full px-8 py-4 text-lg font-semibold text-white bg-red-600 rounded-xl hover:bg-red-700 focus:outline-none focus:ring-4 focus:ring-red-500/30 transition-all shadow-lg hover:shadow-red-600/25"
          >
            Nenda kwenye Tovuti Rasmi
            <ArrowRight className="ml-2 w-6 h-6" />
          </a>
        </motion.div>
      </motion.div>
      
      {/* Footer text */}
      <motion.p 
        initial={{ opacity: 0 }}
        animate={{ opacity: 1 }}
        transition={{ delay: 0.8 }}
        className="mt-8 text-gray-400 text-sm"
      >
        &copy; {new Date().getFullYear()} SwaMedia. Haki zote zimehifadhiwa.
      </motion.p>
    </div>
  );
}
